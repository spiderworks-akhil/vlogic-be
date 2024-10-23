<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\FrontendPage;
use App\Models\Listing;
use App\Models\ListingContent;
use App\Models\Media;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{


    public function index(){
        $listing_id = Listing::where('name','government_listing')->pluck('id')->first();
        if (is_null($listing_id)) {
        return response()->json(['message' => 'Listing ID not found'], 400);
    }
        $listing_content = ListingContent::where('listing_id',$listing_id)->get();
        if ($listing_content->isEmpty()) {
            return response()->json(['message' => 'No content found for the specified listing ID'], 400);
        }
        $page_details = FrontendPage::where('slug','government')->first();
        if (is_null($page_details)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }


        return response()->json(['success'=> true,
        'listing_id' => $listing_id,
        'listing_content' => $listing_content,
        'page_details' => $page_details


    ]);

    }


}
