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
            $page = $request->get('page', 1); // Default to the first page
            $limit = $request->get('limit', 10); // Default to 10 items per page
            $offset = ($page - 1) * $limit; // Calculate offset

            // Fetch the webinar details
            $webinar = Webinar::where('slug', $slug)
                ->where('status', 1)
                ->first();

            if (!$webinar) {
                return response()->json(['error' => 'Not found'], 404);
            }


            $relatedDetails = $webinar->details()
                ->skip($offset)
                ->take($limit)
                ->get();

            $totalDetails = $webinar->details()->count();

            $paginatedData = [
                'current_page' => $page,
                'total_pages' => ceil($totalDetails / $limit),
                'limit' => $limit,
                'total_items' => $totalDetails,
                'items' => WebinarResource::collection($relatedDetails),
            ];

            return response()->json(['data' => $paginatedData]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


}
