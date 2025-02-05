<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\HomePageResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    public function search(Request $request)
    {
        try {
            $criteria = $request->only([
                'search', 'sort_by', 'sort_order', 'page', 'page_size',
                'state', 'local_government', 'representative_id'
            ]);
            $result = $this->homeFactory->globalSearch($criteria);

            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to search ' . $e->getMessage()], 500);
        }
    }

    public function repIndex(Request $request)
    {
        try {
            $criteria = $request->only([
                'search', 'account_type', 'position', 'constituency', 'party',
                'district', 'state', 'local_government',
                'sort_by', 'sort_order', 'page', 'page_size'
            ]);

            $currentUser = (array) $this->findEntity('account', Auth::id());
            $repResult = $this->homeFactory->getRepresentatives($criteria);

            // Ensure data is an array
            $repData = collect($repResult['data'] ?? [])->map(fn ($rep) => (array) $rep)->toArray();

            $filteredData = collect($repData)->filter(function ($rep) use ($currentUser) {
                $repConstituency = strtolower($rep['constituency'] ?? '');
                $repLocalGovt = strtolower($rep['local_government'] ?? '');
                $repState = strtolower($rep['state'] ?? '');

                $userConstituency = strtolower($currentUser['constituency'] ?? '');
                $userLocalGovt = strtolower($currentUser['local_government'] ?? '');
                $userState = strtolower($currentUser['state'] ?? '');

                if (!empty($repConstituency) && $repConstituency === $userConstituency) {
                    return true;
                }

                if (!empty($repLocalGovt) && $repLocalGovt === $userLocalGovt) {
                    return true;
                }

                if (!empty($repState) && $repState === $userState) {
                    return true;
                }

                return false;
            })->values();

            return response()->json([
                'data' => HomePageResource::collection($filteredData)
                    ->map->toRepArray($request)->flatten(1),
                'meta' => [
                    'total' => $filteredData->count(),
                    'current_page' => (int) ($repResult['current_page'] ?? 1),
                    'last_page' => (int) ($repResult['last_page'] ?? 1),
                    'page_size' => (int) ($repResult['page_size'] ?? 10),
                ],
            ], 200);

        } catch (\Exception $e) {
            Log::error('Error fetching representatives: ' . $e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch representatives: ' . $e->getMessage()
            ], 500);
        }
    }

    public function postsIndex(Request $request)
    {
        try {
            $criteria = $request->only([
                'search', 'sort_by', 'sort_order', 'page',
                'page_size', 'status', 'category', 'post_type'
            ]);

            $currentUser = (object) $this->findEntity('account', Auth::id());
            $result = $this->homeFactory->getCommunityPosts($criteria);

            // Ensure data is an array
            $postData = collect($result['data'] ?? [])->map(fn ($post) => (object) $post);

            $filteredData = $postData->filter(function ($post) use ($currentUser) {
                $postConstituency = strtolower($post->author_constituency ?? '');
                $postLocalGovt = strtolower($post->author_local_government ?? '');
                $postState = strtolower($post->author_state ?? '');

                $userConstituency = strtolower($currentUser->constituency ?? '');
                $userLocalGovt = strtolower($currentUser->local_government ?? '');
                $userState = strtolower($currentUser->state ?? '');

                if (!empty($postConstituency) && $postConstituency === $userConstituency) {
                    return true;
                }

                if (!empty($postLocalGovt) && $postLocalGovt === $userLocalGovt) {
                    return true;
                }

                if (!empty($postState) && $postState === $userState) {
                    return true;
                }

                return false;
            })->values();

            return response()->json([
                'data' => HomePageResource::collection($filteredData)
                    ->map->toPostArray()->flatten(1),
                'meta' => [
                    'total' => $filteredData->count(),
                    'current_page' => (int) ($result['current_page'] ?? 1),
                    'last_page' => (int) ($result['last_page'] ?? 1),
                    'page_size' => (int) ($result['page_size'] ?? 10),
                ],
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching posts: ' . $e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch posts: ' . $e->getMessage()
            ], 500);
        }
    }
}
