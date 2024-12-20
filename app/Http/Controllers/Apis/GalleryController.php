<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\Gallery as ResourcesGallery;
use App\Http\Resources\GalleryCollection;
use App\Http\Resources\GalleryMediaCollection;
use App\Models\FrontendPage;
use App\Models\Gallery;
use App\Models\GalleryMedia;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $banner = FrontendPage::where('slug','videos')->first();

        $gallery = Gallery::where('status', 1)
                        ->orderBy('priority')
                        ->get()
                        ->each(function ($gallery) {
                            $gallery->load('gallery')->take(8);
                        });


                        if(!isset($gallery)){
                            return response()->json(['message' => 'No video found'],400);
                        }

        return new GalleryCollection($gallery, $banner);

    }

    public function view(Request $request, $slug){





        $gallery = Gallery::where('status', 1)->where('slug', $slug)->first();



        if($gallery){
            $gallery->gallery = GalleryMedia::with('gallery','media')->where('galleries_id', $gallery->id)->take(8)->get();

            // return new ResourcesGallery($gallery);
            return response([
                'gallery' =>$gallery
            ]);
        }
        else
            return response()->json(['error' => "Rental not Found!"], 404);
    }

    public function medias(Request $request, $slug){
        $limit = $request->limit?$request->limit:8;
        $medias = GalleryMedia::whereHas('gallery', function($gallery) use($slug){
            $gallery->where('slug', $slug)->where('status', 1);
        })->paginate($limit);

        return new GalleryMediaCollection($medias);
    }


}
