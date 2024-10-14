<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Brochure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrochuresController extends Controller
{

         public function index(){
        //     $brochures = DB::table('brochures')
        //     ->join('medias', 'brochures.brochure_id', '=', 'medias.id')
        //     ->select('medias.file_path')
        //     ->get();

        //         dd($brochures);
        // foreach ($brochures as $brochure) {
        //     echo $brochure->file_path;

        //     return response()->json($brochures);
        //  }
        $brochures = Brochure::with('brochure')->get("file_path ","content");
        dd($brochures);



        return json_encode(["messege" => "success"]);

                }

}
