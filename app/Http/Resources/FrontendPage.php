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
use App\Http\Resources\ListingContent as ResourcesListingContent;
use App\Http\Resources\Partner as ResourcesPartner;
use App\Models\FrontendPage as ModelsFrontendPage;
use App\Models\Partner;
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
            'url' => $this->url,
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
            'faq' => new FaqCollection($this->faq->sortBy('id')),
            'related_section' => $this->related_section($this->slug),
            'testimonials' => $this->testimonialsProcess($this->testimonials)
        ];
    }
    private function testimonialsProcess($testimonials){
        if(!empty($testimonials)){
            return $testimonials->map(function($item){
                return new Testimonial($item->testimonial);
            });
        }else{
            return [];
        }
    }
    private function related_section($slug)
    {






        if ($slug == 'home') {
            $partner = Partner::get()->all();

            if (!isset($partner)) {
                return response()->json(['message' => 'Error']);
            }
            $solution = ModelsFrontendPage::whereIn('slug', ['space_management', 'room_scheduling', 'hot_desking', 'work_orders', 'life_safety', 'drawings_service', 'virtual_plan'])->get();

            $spotlight_id = Listing::where('name', 'spotlight')->value('id');

           $spotlight = ListingContent::where('listing_id',$spotlight_id)->get();

           $service = Service::where('parent_id', '=', null)->orWhere('parent_id', '=', '')->get();








            return response()->json([
                'spotlight' => $spotlight,

                'partner' => new PartnerCollection($partner),
                'slider' => $this->slider(),
                'service' => new ServiceCollection($service),
                'solutions' => $solution->map(function ($item) {
                    return [
                        'id' => $item->id,
                        'slug' => $item->slug,
                        'url' => $item->url,
                        'content' => new FrontendPageContentResource($item->content)
                    ];
                })
            ]);
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
            $turn_key_id =Listing::where('name','turn-key')->value('id');
            $turn_key = ListingContent::where('listing_id',$turn_key_id)->get();

            $listing_content = $listing_content_array->toArray();
            return [
                'turn_key' => $turn_key,
                'listing_content' => $listing_content,
                'listing_id' => $listing_id,
            ];
        }
        if ($slug == 'room_scheduling') {
            $service_id = Listing::where('name', 'room_scheduling_listing')->pluck('id')->first();


            $service = ListingContent::where('listing_id', $service_id)->get()->all();

            $listing_id = Listing::whereIn('name', ['Room Challenges', 'room solution'])->pluck('id')->first();

            $challenges = ListingContent::where('listing_id', $listing_id)->get()->all();
            $data = [
                'challenges' => new ListingResourceCollection($challenges),
                'service' => new ListingContentCollection($service),

            ];



            return response()->json($data);
        }


            if($slug == 'virtual_plan'){
                $virtual_plan_id = Listing::where('name', 'virtual-plan-room-requirement')->pluck('id')->first();


                        $virtual_plan = ListingContent::where('listing_id',$virtual_plan_id)->orderBy('priority', 'ASC')->get();


                        $data = [
                            'virtual_plan' => new ListingContentCollection($virtual_plan),


                        ];



                        return response()->json($data);



            }





        if ($slug == 'real_time') {
            $service_id = Listing::where('name', 'real_time_occupancy-tracking')->pluck('id')->first();

            $service = ListingContent::where('listing_id', $service_id)
            ->orderBy('priority', 'ASC')->get();




                $manager_needs_solution_id = Listing::where('name', 'manager-needs-solution')->pluck('id')->first();
                $manager_needs_solution = ListingContent::where('listing_id', $manager_needs_solution_id)
                ->orderBy('priority', 'ASC')->get();

                $managerNeedsId = Listing::where('name', 'manager-needs')->value('id');
                $managerNeeds = ListingContent::where('listing_id', $managerNeedsId)
                ->orderBy('priority', 'ASC')->get();

                $solvingStakeholderId = Listing::where('name', 'solving-stakeholder')->value('id');
                $solvingStakeholder = ListingContent::where('listing_id', $solvingStakeholderId)
                ->orderBy('priority', 'ASC')->get();

                $solvingStakeholderSolutionId = Listing::where('name', 'solving-stakeholder-solution')->value('id');
                $solvingStakeholderSolution = ListingContent::where('listing_id', $solvingStakeholderSolutionId)
                ->orderBy('priority', 'ASC')->get();


            // $listing_id = Listing::where('name', 'challenges_solution')->pluck('id')->first();

            // $challenges = ListingContent::where('listing_id', $listing_id)->get()->all();



            $data = [
                // 'challenges' => $challenges,
                'service' => new ListingContentCollection($service),
                'manager_needs_solution' => new ListingContentCollection($manager_needs_solution),
                'managerNeeds' => new ListingContentCollection($managerNeeds),
                'solvingStakeholder' => new ListingContentCollection($solvingStakeholder),
                'solvingStakeholderSolution' => new ListingContentCollection($solvingStakeholderSolution),
            ];




            return response()->json($data);
        }


        if ($slug == 'hot_desking') {
            $service_id = Listing::where('name', 'service')->pluck('id')->first();

            $service = ListingContent::where('listing_id', $service_id)
                ->orderBy('priority', 'asc')
                ->get();
            $listing_id = Listing::where('name', 'challenges_solution')->pluck('id')->first();

            $challenges = ListingContent::where('listing_id', $listing_id)->orderBy('priority', 'ASC')->get();



            $data = [
                'challenges' => $challenges,
                'service' => new ListingContentCollection($service),
            ];




            return response()->json($data);
        }
        if ($slug == 'space_management') {
            // $service_ids = Listing::where('name', 'service listing')->pluck('id')->first();

            // $service = ListingContent::where('listing_id', $service_ids)->orderBy('priority', 'asc')->get();
            $SpaceManagementCases_id = Listing::where('name','space-management-cases')->pluck('id')->first();
            $SpaceManagementCases = ListingContent::where('listing_id', $SpaceManagementCases_id)->orderBy('priority', 'ASC')->get();

            $space_management_where_solution_id = Listing::where('name','space-management-where-solution')->pluck('id')->first();
            $space_management_where_solution = ListingContent::where('listing_id', $space_management_where_solution_id)->orderBy('priority', 'ASC')->get();


            $space_management_where_requirements_id  = Listing::where('name','space-management-where-requirements')->pluck('id')->first();
            $space_management_where_requirements = ListingContent::where('listing_id', $space_management_where_requirements_id)->orderBy('priority', 'ASC')->get();


            $space_management_who_is_using_solution_id = Listing::where('name', 'space-management-who-is-using-solution')->pluck('id')->first();
            $space_management_who_is_using_solution = ListingContent::where('listing_id', $space_management_who_is_using_solution_id)->orderBy('priority', 'ASC')->get();


            $space_management_who_is_using_requirements_id = Listing::where('name', 'space-management-who-is-using-requirements')->pluck('id')->first();
            $space_management_who_is_using_requirements = ListingContent::where('listing_id', $space_management_who_is_using_requirements_id)->orderBy('priority', 'ASC')->get();


            $space_management_what_do_have_solution_id = Listing::where('name', 'space-management-what-do-have-solution')->pluck('id')->first();
            $space_management_what_do_have_solution = ListingContent::where('listing_id', $space_management_what_do_have_solution_id)->orderBy('priority', 'ASC')->get();

            $space_management_what_do_have_id = Listing::where('name', 'space-management-what-do-have')->pluck('id')->first();
            $space_management_what_do_have = ListingContent::where('listing_id', $space_management_what_do_have_id)->orderBy('priority', 'ASC')->get();


            $space_management_location_id = Listing::where('name', 'space-management-location')->pluck('id')->first();
            $space_management_location = ListingContent::where('listing_id', $space_management_location_id)->orderBy('priority', 'ASC')->get();


            $space_management_where_requirements_id = Listing::where('name', 'space-management-where-requirements')->pluck('id')->first();
            $space_management_where_requirements = ListingContent::where('listing_id', $space_management_where_requirements_id)->orderBy('priority', 'ASC')->get();


            $stoy_id = Listing::where('name', 'customer_stories')->pluck('id')->first();
            $story = ListingContent::where('listing_id', $stoy_id)->orderBy('priority', 'asc')->get();


            $data = [
                'story' => $story,
                // 'service' => new ListingContentCollection($service),
                'SpaceManagementCases' => new ListingContentCollection( $SpaceManagementCases),
                'space_management_where_solution'  => new ListingContentCollection( $space_management_where_solution),
                'space_management_where_requirements'  => new ListingContentCollection( $space_management_where_requirements),
                'space_management_who_is_using_solution' => new ListingContentCollection($space_management_who_is_using_solution),
                'space_management_who_is_using_requirements' => new ListingContentCollection($space_management_who_is_using_requirements),
                'space_management_what_do_have_solution' => new ListingContentCollection($space_management_what_do_have_solution),
                'space_management_what_do_have' => new ListingContentCollection($space_management_what_do_have),
                'space_management_location' => new ListingContentCollection($space_management_location),
                'space_management_where_requirements' => new ListingContentCollection($space_management_where_requirements),
                        ];
            return response()->json($data);
        }

        if ($slug == 'iwms') {


            $service_id = Listing::where('name', 'service_listing')->pluck('id')->first();


            if ($service_id) {
                $service = ListingContent::where('listing_id', $service_id)->orderBy('priority', 'ASC')->get();
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


        $services = Service::with(['featured_image', 'banner_image'])->where('status', 1)->orderBy('priority', 'ASC')->get();
        if (is_null($services)) {
            return response()->json(['message' => 'services page not found'], 400);
        }
        // $services = Service::select('name','title','id','slug','featured_image_id','banner_image_id')->where('status', 1)->orderBy('priority','DESC')->get();

        return new ServiceCollection($services);
    }

    private function slider()
    {
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



    private function getgallery()
    {
        $gallery = Gallery::where('status', 1)
            ->orderBy('priority')
            ->get()
            ->each(function ($gallery) {
                $gallery->load('gallery')->take(8);
            });


        if (!isset($gallery)) {
            return response()->json(['message' => 'No video found'], 400);
        }
        return new GalleryCollection($gallery);
    }
}
