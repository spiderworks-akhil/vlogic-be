<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\Media;
use App\Http\Resources\MediaCollection;
use App\Models\Webinar;

class WebinarController extends Controller
{
    public function webinar (){
        $data = Webinar::with('media')->get();
        if (is_null($data)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }


        return new MediaCollection($data);


    }
}
