<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\Media;
use App\Models\Webinar;

class WebinarController extends Controller
{
    public function webinar (){
        $page_details = Webinar::with('media')->get();

        dd($page_details);
    }
}
