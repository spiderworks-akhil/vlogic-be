<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Brochure;
use Illuminate\Http\Request;


class BrochuresController extends Controller
{
    public function index(){




        $brochures = Brochure::with('brochure:id,file_path')
        ->select('id', 'name', 'title', 'content', 'brochure_id')
        ->get();




         foreach ($brochures as $brochure)
         if ($brochure->brochure) {
            $filePaths[] = $brochure->brochure->file_path;
        }

        return response()->json(["message" => "success", "file_paths" => $filePaths]);
    }





}
