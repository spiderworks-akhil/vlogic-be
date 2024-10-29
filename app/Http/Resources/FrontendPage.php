<?php

namespace App\Http\Resources;

use App\Models\Gallery;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\ListingContent;
use Illuminate\Http\Resources\Json\JsonResource;

class FrontendPage extends JsonResource
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
            'banner_heading_colour' => $this->banner_heading_colour,
            'banner_content_colour' => $this->banner_content_colour,
            'content' => new FrontendPageContentResource($this->content),
            'browser_title' => $this->browser_title,
            'og_title' => $this->og_title,
            'meta_description' => $this->meta_description,
            'og_description' => $this->og_description,
            'og_image' => new Media($this->og_image),
            'meta_keywords' => $this->meta_keywords,
            'bottom_description' => $this->bottom_description,
            'extra_js' => $this->extra_js,
            'faq' => new FaqCollection($this->faq),
            'related_section' => $this->related_section($this->slug)
        ];
    }
    private function related_section($slug)
    {

        if ($slug == 'videos') {
            return [
                'gallery' => $this->getgallery(),
            ];
        }


        if ($slug === 'government') {
            $listing_id = Listing::where('name', 'government_listing')->pluck('id')->first();
            if (is_null($listing_id)) {
                return ['error' => 'Listing ID not found'];
            }

            $listing_content_array = ListingContent::where('listing_id', $listing_id)->get();
            if ($listing_content_array->isEmpty()) {
                return ['error' => 'No content found for the specified listing ID'];
            }

            $listing_content = $listing_content_array->toArray();
            return [
                'listing_content' => $listing_content,
                'listing_id' => $listing_id,
            ];
        }


        return [];
    }

    private function getgallery(){
        $gallery = Gallery::where('status', 1)
        ->orderBy('priority')
        ->get()
        ->each(function ($gallery) {
            $gallery->load('gallery')->take(8);
        });


        if(!isset($gallery)){
            return response()->json(['message' => 'No video found'],400);
        }
        return new GalleryCollection($gallery);
    }

}
