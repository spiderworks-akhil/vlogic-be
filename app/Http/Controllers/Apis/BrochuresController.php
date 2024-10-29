<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrochuresCollection;
use App\Http\Resources\MediaCollection;
use App\Models\Media;
use App\Models\Brochure;
use Illuminate\Http\Request;


class BrochuresController extends Controller
{
    public function index(){




        $brochures = Brochure::get();


            if(!empty($brochure)){
                return response()->json(['message' => "Brouchure is not found"],400);
            }



        // return response()->json(["message" => "success", "file_paths" => $filePaths]);
        return new BrochuresCollection($brochures);
    }





}
