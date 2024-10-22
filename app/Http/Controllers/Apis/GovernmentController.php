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
        $listing_content = ListingContent::where('listing_id',$listing_id)->get();
        $page_details = FrontendPage::where('slug','government')->first();

        return response()->json(['success'=> true,
        'listing_id' => $listing_id,
        'listing_content' => $listing_content,
        'page_details' => $page_details


    ]);

    }


}
