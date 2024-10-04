<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Handle both object and array data
        $data = is_object($this->resource) ? $this->resource : (object) $this->resource;

        return [
            'id' => $data->id ?? null,
            'title' => $data->title ?? null,
            'description' => $data->description ?? null,
            'creator_id' => $data->creator_id ?? null,
            'target_representative_id' => $data->target_representative_id ?? null,
            'signatures' => $data->signature_count ?? 0,
            'created_at' => $data->created_at ?? null,
            'updated_at' => $data->updated_at ?? null,
        ];
    }
}
