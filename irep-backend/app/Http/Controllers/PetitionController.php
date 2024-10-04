<?php

namespace App\Http\Controllers;

use App\Models\Petition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PetitionRequest;
use App\Http\Resources\PetitionResource;

class PetitionController extends Controller
{
    public function index()
    {
        $petitions = DB::table('petitions')->get();

        return response()->json(PetitionResource::collection($petitions));
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
        $petition = DB::table('petitions')->where('id', $id)->first();

        if (!$petition) {
            return response()->json(['message' => 'Petition not found'], 404);
        }

        return response()->json(new PetitionResource($petition));
    }

}
