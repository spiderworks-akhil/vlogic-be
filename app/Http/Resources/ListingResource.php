<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListingContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'meida_type' => $this->meida_type,
            'media_id' => new Media($this->media),
            'icon' => $this->icon,
            'title' => $this->title,
            'detail_description' => $this->detail_description,
            'youtube_link' => $this->youtube_link
        ];
    }
}
