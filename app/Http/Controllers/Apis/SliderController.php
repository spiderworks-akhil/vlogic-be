<?php

namespace App\Http\Controllers\Apis;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SliderCollection;
use App\Http\Resources\Slider as ResourcesSlider;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = $request->all();
            $limit = !empty($data['limit']) ? (int)$data['limit'] : 10;
            $services = Slider::where('status', 1)
                ->orderBy('priority', 'DESC')
                ->paginate($limit);
            return new SliderCollection($services);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function featured()
    {
        $slider = Slider::select('name', 'title', 'id', 'slug', 'featured_image_id', 'banner_image_id')
            ->with(['featured_image', 'banner_image'])
            ->where('status', 1)
            ->orderBy('priority', 'DESC')
            ->get();
        return new SliderCollection($slider);
    }

    // public function view(Request $request, $slug)
    // {
    //     try {
    //         $slider = Slider::with(['featured_image', 'banner_image'])
   //             ->where('slug', $slug)
    //             ->where('status', 1)
    //             ->first();
    //         if (!$slider) {
    //             return response()->json(['error' => 'Not found'], 404);
    //         }
    //         return new ResourcesSlider($slider);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }
      public function view(Request $request, $slug)
    {
        try {
            // Retrieve a specific slider by its slug
            $slider = Slider::with(['featured_image', 'banner_image'])
                ->where('slug', $slug)
                ->where('status', 1)
                ->first();

            // Debugging output
            if (!$slider) {
                return response()->json(['error' => 'Not found'], 404);
            }

            // Check the type of $slider
            if (is_array($slider)) {
                return response()->json(['error' => 'Slider is an array, expected object'], 500);
            }

            // Check the type of related models
            if (is_array($slider->featured_image) || is_array($slider->banner_image)) {
                return response()->json(['error' => 'Related model is an array, expected object'], 500);
            }

            // Return the slider resource
            return new ResourcesSlider($slider);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}
