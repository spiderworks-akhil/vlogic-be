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
    public function webinar(Request $request)
    {

        $banner = FrontendPage::where('slug', 'webinar')->get();


        $data = Webinar::with('media')->get();
        if (is_null($data)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }




        try{
            $data = $request->all();
            $limit = !empty($data['limit'])?(int)$data['limit']:10;
            $webinar = Webinar::with(['featured_image', 'category'])->where('status', 1);
            if(!empty($data['categories'])){
                $webinar->whereIn('category_id', $data['categories']);
            }
            $blogs = $webinar->orderBy('published_on', 'DESC')->paginate($limit);
            return new WebinarResourceCollection($webinar);
        }
        catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
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
