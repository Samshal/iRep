<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = is_object($this->resource) ? $this->resource : (object) $this->resource;

        $responseArray = [
            'id' => $data->id,
            'sender_id' => $data->sender_id,
            'sender_name' => $data->sender_name,
            'receiver_id' => $data->receiver_id,
            'receiver_name' => $data->receiver_name,
            'message' => $data->message,
            'sent_at' => $data->sent_at,
            'read_at' => $data->read_at,
            'edited_at' => $data->edited_at,
        ];


        return $responseArray;
    }
}
