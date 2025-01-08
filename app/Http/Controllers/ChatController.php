<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendMessage;
use App\Http\Resources\MessageResource;

class ChatController extends Controller
{
    public function index($id)
    {
        $criteria = [
            'page' => request()->query('page', 1),
            'page_size' => request()->query('page_size', 10),
        ];

        $messages = $this->messageFactory->getMessages(Auth::id(), $id, $criteria);

        return response()->json(MessageResource::collection($messages));
    }

    public function chatted()
    {
        try {
            $criteria = [
                'page' => request()->query('page', 1),
                'page_size' => request()->query('page_size', 10),
            ];

            $chats = $this->messageFactory->getUsersChattedWith(Auth::id(), $criteria);

            return response()->json($chats);

        } catch (\Exception $e) {
            \Log::error('Error fetching chats: ' . $e->getMessage());

            return response()->json([
                'error' => 'An error occurred while fetching the chats. Please try again later.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getUnreadMessages()
    {
        $messages = $this->messageFactory->getUnreadMessages(Auth::id());

        return response()->json(MessageResource::collection($messages));
    }

    public function markAsRead($id)
    {
        $this->messageFactory->markAsRead($id);

        return response()->json(['message' => 'Message marked as read']);
    }

    public function send(Request $request)
    {
        try {
            $data = $request->validate([
                'receiver_id' => 'required|integer',
                'message' => 'required|string',
            ]);

            $data['sender_id'] = Auth::id();
            $data['sent_at'] = now();

            $message = $this->messageFactory->insertMessage($data);

            sendMessage::dispatch($message);

            return response()->noContent();

        } catch (\Exception $e) {
            \Log::error('Error sending message: ' . $e->getMessage());
            return response()->json([
                'error' => 'Something went wrong. Please try again later.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        if (!Auth::user()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $this->messageFactory->deleteMessage($id);

        return response()->noContent();
    }


}
