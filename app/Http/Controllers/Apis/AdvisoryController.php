<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\FrontendPage;
use Illuminate\Http\Request;


class AdvisoryController extends Controller
{

    public function index(){
        $advisory = FrontendPage::where('slug','advisoryboard')->get();

        if($advisory->isEmpty()){
            return response()->json(['message'=>"Advisory not found"],400);
        }
     return json_encode(["messege" => "successfully loaded"],200);

    }

}
