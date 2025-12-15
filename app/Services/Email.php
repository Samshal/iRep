<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Email
{
    protected $templates;
    protected $authorizationKey;
    protected $url;
    protected $fromAddress;
    protected $fromName;

    public function __construct(EmailTemplates $templates)
    {
        $this->templates = $templates;
        $this->authorizationKey = trim(env('EMAIL_AUTH_KEY', ''));
        $this->url = trim(env('EMAIL_API_URL', ''));
        // Use configurable "from" details from environment.
        // Falls back to Laravel mail defaults, then sensible hard-coded values.
        $this->fromAddress = trim(env('MAIL_FROM_ADDRESS', env('EMAIL_FROM_ADDRESS', 'noreply@hordun.me')));
        $this->fromName = trim(env('MAIL_FROM_NAME', env('EMAIL_FROM_NAME', 'iREP')));
    }

    protected function sendEmail($templateKey, $recipientEmail, $recipientName, $mergeInfo)
    {
        Log::info('Preparing to send email', [
            'template_key' => $templateKey,
            'to' => $recipientEmail,
            'from' => $this->fromAddress,
            'url' => $this->url,
        ]);

        $payload = [
            'mail_template_key' => $templateKey,
            'from' => [
                'address' => $this->fromAddress,
                'name' => $this->fromName,
            ],
            'to' => [
                [
                    'email_address' => [
                        'address' => $recipientEmail,
                        'name' => $recipientName,
                    ]
                ]
            ],
            'merge_info' => $mergeInfo,
        ];

        try {
            $response = Http::withHeaders([
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'authorization' => $this->authorizationKey,
            ])->post($this->url, $payload);

            Log::info('Email API response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('Email exception: ' . $e->getMessage(), [
                'template_key' => $templateKey,
                'to' => $recipientEmail,
            ]);
            return false;
        }
    }

    public function sendNewUserVerification($recipientEmail, $recipientName = '', array $templateVariables = [])
    {
        return $this->sendEmail(
            $this->templates::$userVerification,
            $recipientEmail,
            $recipientName,
            $templateVariables
        );
    }

    public function sendResetPasswordVerification($recipientEmail, $recipientName = '', array $templateVariables = [])
    {
        return $this->sendEmail(
            $this->templates::$resetPassword,
            $recipientEmail,
            $recipientName,
            $templateVariables
        );
    }

}
