<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Resources\Service as ServiceResource;
use App\Http\Resources\ServiceCollection;

class ServiceController extends Controller
{
    public function index(Request $request) {
        try {
            $data = $request->all();

            $limit = !empty($data['limit']) ? (int)$data['limit'] : 10;
            $services = Service::where('status', 1)
                ->orderBy('priority', 'ASC')
                ->paginate($limit);

            return new ServiceCollection($services);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function featured(){



        $services = Service::select('name','title','id','slug','featured_image_id','banner_image_id')->with(['featured_image','banner_image'])->where('status', 1)->orderBy('priority','DESC')->get();
        if (is_null($services)) {
            return response()->json(['message' => 'Government page not found'], 400);
        }
        // $services = Service::select('name','title','id','slug','featured_image_id','banner_image_id')->where('status', 1)->orderBy('priority','DESC')->get();


        return new ServiceCollection($services);
    }

    public function view(Request $request, $slug){
        try{
            $data = $request->all();

           $service = Service::with(['featured_image','banner_image'])->where('slug', $slug)->where('status', 1)->first();





;           if(!$service)
                return response()->json(['error' => 'Not found'], 404);

                    $data = [
                        'service' => new ServiceResource($service),

                    ];
                    return ($data);


        }
        catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
