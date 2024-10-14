<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\FrontendPage;
use Illuminate\Http\Request;


class AdvisoryController extends Controller
{

    public function index(){
        $advisory = FrontendPage::where('slug','advisoryboard')->get();
     return json_encode(["messege" => "successfully loaded"]);

    }

}
