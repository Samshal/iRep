<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PetitionRequest;

class PetitionController extends Controller
{
    public function index(Request $request)
    {
        $query = Petition::query();

        if ($request->has('representative_id')) {
            $query->where('target_representative_id', $request->representative_id);
        }

        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        $petitions = $query->paginate(10);

        return response()->json($petitions);
    }

    public function create(PetitionRequest $request)
    {
        $validated = $request->validated();
        $validated['creatorId'] = auth()->id();
        $validated['targetRepresentativeId'] = $validated['target_representative_id'];

        $petition = new Petition(null, $validated);

        $petitionId = $petition->createPetition();

        return response()->json([
            'message' => 'Petition created successfully',
            'petition_id' => $petitionId,
        ], 201);
    }

    public function show($id)
    {
        $petition = Petition::find($id);

        if (!$petition) {
            return response()->json(['message' => 'Petition not found'], 404);
        }

        return response()->json($petition);
    }

    public function update(Request $request, $id)
    {
        $petition = Petition::find($id);

        if (!$petition) {
            return response()->json(['message' => 'Petition not found'], 404);
        }

        if ($petition->created_by != auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'target_representative_id' => 'sometimes|integer|exists:representatives,id',
        ]);

        // Update petition with the validated data
        $petition->update($validated);

        return response()->json(['message' => 'Petition updated successfully']);
    }

    // Delete a petition (only if the user is the creator)
    public function destroy($id)
    {
        $petition = Petition::find($id);

        if (!$petition) {
            return response()->json(['message' => 'Petition not found'], 404);
        }

        if ($petition->created_by != auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $petition->delete();

        return response()->json(['message' => 'Petition deleted successfully']);
    }

    // Allow a user to sign a petition
    public function signPetition($id)
    {
        $petition = Petition::find($id);

        if (!$petition) {
            return response()->json(['message' => 'Petition not found'], 404);
        }

        // Check if the user has already signed the petition
        $alreadySigned = DB::table('petition_signatures')
            ->where('petition_id', $id)
            ->where('user_id', auth()->id())
            ->exists();

        if ($alreadySigned) {
            return response()->json(['message' => 'You have already signed this petition'], 400);
        }

        // Insert signature
        DB::table('petition_signatures')->insert([
            'petition_id' => $id,
            'user_id' => auth()->id(),
            'signed_at' => now(),
        ]);

        return response()->json(['message' => 'Petition signed successfully']);
    }

    // List signatures of a petition
    public function listSignatures($id)
    {
        $signatures = DB::table('petition_signatures')
            ->where('petition_id', $id)
            ->get();

        return response()->json($signatures);
    }
}
