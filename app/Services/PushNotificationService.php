<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Illuminate\Support\Facades\Log;

class PushNotificationService
{
    protected $messaging;

    public function __construct()
    {
        $this->messaging = (new Factory())
            ->withServiceAccount(storage_path(env('FIREBASE_CREDENTIALS_PATH')))
            ->createMessaging();
    }

    public function sendPushNotification(string $deviceToken, string $title, string $body)
    {
        try {
            $imageUrl = 'https://res.cloudinary.com/dsueaitln/image/upload/v1733239113/istockphoto-522855255-612x612_eyv1vf.jpg';
            $notification = Notification::create($title, $body, $imageUrl);

            Log::info('Notification Payload', ['notification' => $notification->jsonSerialize()]);


            $message = CloudMessage::withTarget('token', $deviceToken)
                ->withNotification($notification);

            $response = $this->messaging->send($message);

            Log::info('Push Notification sent successfully!', ['response' => $response]);
            return response()->json(['status' => 'Notification sent successfully!']);
        } catch (FirebaseException $e) {
            Log::error('Failed to send push notification: ' . $e->getMessage());
        }
    }

    // Method to send push notification to a topic
    public function sendPushNotificationToTopic(string $topic, string $title, string $body)
    {
        try {
            $notification = Notification::create($title, $body);

            // Use the 'topic' target for sending to a topic
            $message = CloudMessage::withTarget('topic', $topic)
                ->withNotification($notification);

            $this->messaging->send($message);

            Log::info('Notification sent to topic successfully!');
            return response()->json(['status' => 'Notification sent to topic successfully!']);
        } catch (FirebaseException $e) {
            Log::error('Failed to send notification to topic: ' . $e->getMessage());
            return response()->json(['status' => 'Failed to send notification to topic', 'error' => $e->getMessage()], 500);
        }
    }

    public function subscribeToTopic(string $deviceToken, string $topic)
    {
        try {
            // Subscribe the device tokens to the specified topic
            $this->messaging->subscribeToTopic($deviceToken, $topic);

            Log::info('Device subscribed to topic successfully!', ['topic' => $topic]);
            return response()->json(['status' => 'Devices subscribed to topic successfully!']);
        } catch (FirebaseException $e) {
            Log::error('Failed to subscribe to topic: ' . $e->getMessage());
            return response()->json(['status' => 'Failed to subscribe to topic', 'error' => $e->getMessage()], 500);
        }
    }
}
