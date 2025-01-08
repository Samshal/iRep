<?php

namespace App\Models;

class Message
{
    public $id;
    public $senderId;
    public $receiverId;
    protected $message;
    public $sentAt;

    public function __construct($id, $data)
    {
        $this->id = $id;
        $this->senderId = $data['sender_id'];
        $this->receiverId = $data['receiver_id'];
        $this->message = $data['message'];
        $this->sentAt = $data['sent_at'];

    }

    public function getMessage()
    {
        return $this->message;
    }

}
