<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WebinarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id'=>$this->id,
            'slug'=>$this->slug,
            'title'=>$this->title,
            'content'=>$this->content,
            'browser_title'=>$this->browser_title,
            'banner_image' => new Media($this->media),
            'button_name' => $this->button_name,
            'featured_image' => new Media($this->featured_image),
            'published_on' => $this->published_on,

        ];
    }
}
