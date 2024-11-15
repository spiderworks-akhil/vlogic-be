<?php

namespace App\Http\Resources;

use App\Models\Slider;
use App\Models\SliderPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Service extends JsonResource
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
            'name' => $this->name,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => new FrontendPageContentResource($this->content),
            'url' => $this->url,
            'icon_image' => new Media($this->icon_image),
            'featured_image' => new Media($this->featured_image),
            'banner_image' => new Media($this->banner_image),
            'browser_title' => $this->browser_title,
            'og_title' => $this->og_title,
            'meta_description' => $this->meta_description,
            'og_description' => $this->og_description,
            'og_image' => new Media($this->og_image),
            'meta_keywords' => $this->meta_keywords,
            'bottom_description' => $this->bottom_description,
            'extra_js' => $this->extra_js,
            'faq' => new FaqCollection($this->faq),
        //    'gallery' => new MediaCollection($this->gallery),
            'children' => new ServiceCollection($this->whenLoaded('children')),
            'sub_services' => $this->sub_services(),

        ];
    }


    private function sub_services(){

    $sub_service = Service::where('parent_id', $this->id)->get();

    
    return $sub_service;
    }



}
