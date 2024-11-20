<?php

namespace App\Http\Controllers\Apis;

use App\Models\Webinar;

use App\Models\FrontendPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WebinarResource;
use App\Http\Resources\WebinarResourceCollection;
use Termwind\Components\Dd;

class WebinarController extends Controller
{

    public function webinar(Request $request)
    {
        try {
            // Fetch the banner for the webinar page
            $banner = FrontendPage::where('slug', 'webinar')->first();

            // Set the limit for pagination (default is 10)
            $limit = (int) $request->query('limit', 10);

            // Build the query for webinars with a status of 1
            $webinarQuery = Webinar::with(['featured_image', 'media'])
                ->where('status', 1);

            // Paginate the query with the specified limit
            $webinars = $webinarQuery->orderBy('created_at', 'DESC')->paginate($limit);

            // Return the response with the banner and paginated webinars
            return response()->json([

                'data' => new WebinarResourceCollection($webinars,$banner,), // Use the paginated data
            ]);
        } catch (\Exception $e) {
            // Handle exceptions and return a 500 error response
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
