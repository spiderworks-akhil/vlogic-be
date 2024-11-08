<?php

namespace App\Http\Controllers\Apis;

use App\Models\Webinar;

use App\Models\FrontendPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WebinarResource;
use App\Http\Resources\WebinarResourceCollection;

class WebinarController extends Controller
{
    public function webinar()
    {

        $banner = FrontendPage::where('slug', 'webinar')->get();


        $data = Webinar::with('media')->get();
        if (is_null($data)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }


        return new WebinarResourceCollection($data, $banner);
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
