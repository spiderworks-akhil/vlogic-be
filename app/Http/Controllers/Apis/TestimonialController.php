<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\Testimonial as ResourcesTestimonial;
use App\Http\Resources\TestimonialCollection;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function featured(){
        $testimonials = Testimonial::where('status', 1)->where('is_featured', 1)->orderBy('priority')->get();

        if ($testimonials->isEmpty()) {
            return response()->json(['message' => 'Testimonials Not Found'], 404);
        }
        return new TestimonialCollection($testimonials);
    }

    public function index(){

        $testimonials = Testimonial::where('status', 1)->orderBy('priority')->get();

        if ($testimonials->isEmpty()) {
            return response()->json(['message' => 'Testimonials Not Found'], 404);
        }
        return new TestimonialCollection($testimonials);
    }


    public function detail (Request $request, $id)
    {

        try {
            $testimonial_detail = Testimonial::where('id', $id)
                ->where('status', 1)
                ->first();

            if (!$testimonial_detail) {
                return response()->json(['error' => 'Not found'], 404);
            }

            $testimonial_details = new ResourcesTestimonial($testimonial_detail);


            return response()->json(['data' => $testimonial_details]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
     }


}
