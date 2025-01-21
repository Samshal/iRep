<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Notification implements ShouldBroadcast
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $notification;

    /**
     * Create a new event instance.
     */
    public function __construct(array $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        if (isset($this->notification['table']) && $this->notification['table'] === 'admin') {
            return [
                new PrivateChannel("admin.{$this->notification['account_id']}"),
            ];
        }

        return [
            new PrivateChannel("user.{$this->notification['account_id']}"),
        ];
    }

    /**
     * Data to send with the broadcast.
     */
    public function broadcastWith()
    {
        if (isset($this->notification['table'])) {
            unset($this->notification['table']);
        }

        return $this->notification;
    }
}
