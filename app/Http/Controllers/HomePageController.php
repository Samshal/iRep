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

            $currentUser = $this->findEntity('account', Auth::id());

            if (empty($criteria['state'])) {
                $criteria['all'] = true;
            }

            $criteria = array_merge($criteria, array_filter([
                'local_government' => $criteria['local_government'] ?? $currentUser->local_government ?? null,
                'state' => $criteria['state'] ?? $currentUser->state ?? null,
            ]));


            $repResult = $this->homeFactory->getRepresentatives($criteria);

            return response()->json([
                'data' => HomePageResource::collection($repResult['data'] ?? [])
                    ->map->toRepArray($request)->flatten(1),
                'meta' => [
                    'total' => (int) ($repResult['total'] ?? 0),
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

            $currentUser = $this->findEntity('account', Auth::id());

            $criteria = array_merge($criteria, array_filter([
                'author_state' => isset($criteria['state']) ? $criteria['state'] : $currentUser->state ?? null,
                'author_constituency' => $criteria['constituency'] ?? null,
                'author_local_government' => $criteria['local_government'] ?? null,
            ]));

            // Fetch posts and metadata
            $result = $this->homeFactory->getCommunityPosts($criteria);

            $posts = $result['data'] ?? [];
            $meta = [
                'total' => (int) ($result['total'] ?? 0),
                'current_page' => (int) ($result['current_page'] ?? 1),
                'last_page' => (int) ($result['last_page'] ?? 1),
                'page_size' => (int) ($result['page_size'] ?? 10),
            ];

            return response()->json([
                'data' => HomePageResource::collection($posts)
                    ->map->toPostArray()->flatten(1),
                'meta' => $meta,
            ], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching posts: ' . $e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch posts: ' . $e->getMessage()
            ], 500);
        }
    }
}
