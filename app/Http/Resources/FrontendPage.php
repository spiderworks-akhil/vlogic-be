<?php

namespace App\Http\Resources;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Listing;
use App\Models\Service;
use App\Models\SliderPhoto;
use Illuminate\Http\Request;
use App\Models\ListingContent;
use App\Http\Resources\ServiceCollection;
use App\Http\Controllers\Admin\SliderController;
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


            if ($slug == 'home'){
                return [
                    'slider' => $this->slider(),
                    'service' => $this->service()

                ];
            }

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
        if($slug=='room_scheduling'){
            $service_id = Listing::where('name','service listing')->get('id');

            $service = ListingContent::whereIn('listing_id',$service_id)->get()->all();

            $listing_id = Listing::whereIn('name', ['Room Challenges', 'room solution'])->get('id');
                $challenges = ListingContent::whereIn('listing_id',$listing_id)->get()->all();
                $data = [
                    'challenges' => $challenges,
                    'service' => new ListingContentCollection($service),
                ];



            return response()->json($data);
        }

        if ($slug == 'hot_desking') {
            $service_id = Listing::where('name', 'service')->pluck('id')->get();
            dd($service_id);
            $service = ListingContent::where('listing_id', $service_id)->get()->all();

            $listing_id = Listing::where('name', 'challenges_solution')->pluck('id')->first();

            $challenges = ListingContent::where('listing_id', $listing_id)->get()->all();



            $data = [
                'challenges' => $challenges,
                'service' => $service,
            ];




            return response()->json($data);
        }
        if ($slug == 'space_management') {
            $service_ids = Listing::where('name', 'service listing')->pluck('id')->first();

            $service = ListingContent::where('listing_id', $service_ids)->get();



            $stoy_id = Listing::where('name', 'customer_stories')->pluck('id')->first();

            $story = ListingContent::where('listing_id', $stoy_id)->get();


            $data = [
                'story' => $story,
                'service' => new ListingContentCollection($service),
            ];
            return response()->json($data);
        }

        if ($slug == 'iwms') {


           $service_id = Listing::where('name', 'service_listing')->pluck('id')->first();


            if ($service_id) {
                $service = ListingContent::where('listing_id', $service_id)->get();
                $data = [
                    'service' => new ListingContentCollection($service),
                ];
                return response()->json($data);
            } else {
                return response()->json(['error' => 'Service not found'], 404);
            }
        }



        return [];
    }
    private function service()
    {


        $services = Service::select('name','title','id','slug','featured_image_id','banner_image_id')->with(['featured_image','banner_image'])->where('status', 1)->orderBy('priority','DESC')->get();
        if (is_null($services)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }
        // $services = Service::select('name','title','id','slug','featured_image_id','banner_image_id')->where('status', 1)->orderBy('priority','DESC')->get();

        return new ServiceCollection($services);
    }

    private function slider() {
        $sliders = Slider::where('slider_name', 'home')
            ->with(['photos.media'])
            ->get();

        $sliders->each(function ($slider) {
            $slider->photos_with_media = $slider->photos->map(function ($photo) {
                return [
                    'photo' => $photo,
                    'media_image' => $photo->media ? asset($photo->media->image_path) : null,
                ];
            });
        });

        return new SliderCollection($sliders);
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
