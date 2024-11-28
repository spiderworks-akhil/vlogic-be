<?php

namespace App\Http\Controllers\Apis;

use Carbon\Carbon;

use App\Models\Webinar;
use Termwind\Components\Dd;
use App\Models\FrontendPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WebinarResource;
use App\Http\Resources\WebinarResourceCollection;

class WebinarController extends Controller
{



public function webinar(Request $request)
{
    try {
        $banner = FrontendPage::where('slug', 'webinar')->first();

        $limit = (int) $request->query('limit', 12);

        $webinarQuery = Webinar::with(['featured_image', 'media'])
            ->where('status', 1)
            ->get();

            $currentDate = Carbon::now();

            $currentWebinars = Webinar::with(['featured_image', 'media'])
            ->where('status', 1)->where('published_on','<',$currentDate)
            ->orderBy('published_on','DESC')
            ->get();

            

            $futureWebinars = Webinar::with(['featured_image', 'media'])
            ->where('status', 1)->where('published_on','>=',$currentDate)
            ->orderBy('published_on','DESC')
            ->get();


        return response()->json([
            'current_webinars' => new WebinarResourceCollection($currentWebinars, $banner),
            'future_webinars' => new WebinarResourceCollection($futureWebinars, $banner),
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}





    public function detail(Request $request, $slug)
    {
        try {
            $webinar_detail = Webinar::where('slug', $slug)
                ->where('status', 1)
                ->first();

            if (!$webinar_detail) {
                return response()->json(['error' => 'Not found'], 404);
            }

            $webinar_detail = new WebinarResource($webinar_detail);


            return response()->json(['data' => $webinar_detail]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
