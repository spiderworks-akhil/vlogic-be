<?php

namespace App\Http\Controllers\Apis;

use App\Models\Webinar;

use App\Models\FrontendPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WebinarResourceCollection;

class WebinarController extends Controller
{
    public function webinar (){

        $banner = FrontendPage::where('slug','webinar')->get();


        $data = Webinar::with('media')->get();
        if (is_null($data)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }


        return new WebinarResourceCollection($data,$banner );


    }
}
