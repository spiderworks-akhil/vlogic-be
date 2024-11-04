<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Slider_photos extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'slider_id' => $this->slider_id,
            'media_id' => new Media($this->media),
            'meta_data' => $this->meta_data,
            'priority' => $this->priority,
          
        ];


    }
}
