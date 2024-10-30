<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrochuresResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'title' => $this->title,
            'content' => $this->content,
            'browser_title' => $this->browser_title,
            'og_title' => $this->og_title,
            'meta_description' => $this->meta_description,
            'og_description' => $this->og_description,
            'brochure' => new Media($this->brochure),
            'meta_keywords' => $this->meta_keywords,
            'bottom_description' => $this->bottom_description,
            'extra_js' => $this->extra_js,
            'logo' => new Media($this->logo)

        ];
    }
}
