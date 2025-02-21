<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class PushNotificationService
{
    protected $client;
    protected $expoUrl = 'https://exp.host/--/api/v2/push/send';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendPushNotification(string $deviceToken, string $title, string $body)
    {
        try {
            $payload = [
                'to' => $deviceToken,
                'title' => $title,
                'body' => $body,
                'sound' => 'default'
            ];

            $response = $this->client->post($this->expoUrl, [
                'json' => $payload,
                'headers' => ['Accept' => 'application/json']
            ]);

            Log::info('Push notification sent!', ['response' => $response->getBody()]);
            return response()->json(['status' => 'Notification sent successfully!']);
        } catch (\Exception $e) {
            Log::error('Failed to send push notification: ' . $e->getMessage());
            return response()->json(['status' => 'Failed to send notification',
                'error' => $e->getMessage()], 500);
        }
    }
}
