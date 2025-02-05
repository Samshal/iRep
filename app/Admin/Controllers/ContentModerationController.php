<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Admin\Factories\ContentModerationFactory;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ContentModerationController extends Controller
{
    protected $contentModerationFactory;

    public function __construct(ContentModerationFactory $contentModerationFactory)
    {
        parent::__construct();
        $this->contentModerationFactory = $contentModerationFactory;
    }

    public function petitionStats()
    {

        $post = $this->contentModerationFactory->getPostStats('petition');

        return response()->json($post);
    }

    public function getContents(Request $request)
    {
        try {
            $criteria = $request->only(['page', 'page_size', 'states', 'status',
            'reported', 'post_type', 'search']);
            $result = $this->contentModerationFactory->getContents($criteria);

            $posts = $result['data'];
            $meta = $result['meta'];

            return response()->json([
                'data' => PostResource::collection($posts),
                'meta' => $meta,
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch posts ' . $e->getMessage()], 500);
        }
    }

    public function getContent($id, Request $request)
    {
        try {
            $post = Controller::findEntity('post', $id);
            return response()->json((new PostResource($post))->toDetailArray($request), 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch post ' . $e->getMessage()], 500);
        }
    }


    public function deletePetition($id)
    {
        try {
            $result = $this->contentModerationFactory->deletePost($id, 'petition');

            $this->logActivity("delete", "post", $id, Auth::id());
            app('search')->deleteData('posts', $id);
            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete petition ' . $e->getMessage()], 500);
        }
    }

    public function deleteReport($id)
    {
        try {
            $result = $this->contentModerationFactory->deletePost($id, 'eyewitness');

            $this->logActivity("delete", "post", $id, Auth::id());
            app('search')->deleteData('posts', $id);

            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete report ' . $e->getMessage()], 500);
        }
    }

    public function ignorePetition($id)
    {
        try {
            $result = $this->contentModerationFactory->ignorePost($id, 'petition');

            $this->postFactory->indexPost($id);
            $this->logActivity("ignore", "post", $id, Auth::id());
            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to ignore petition ' . $e->getMessage()], 500);
        }
    }

    public function ignoreReport($id)
    {
        try {
            $result = $this->contentModerationFactory->ignorePost($id, 'eyewitness');

            $this->postFactory->indexPost($id);
            $this->logActivity("ignore", "post", $id, Auth::id());
            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to ignore report ' . $e->getMessage()], 500);
        }
    }

}
