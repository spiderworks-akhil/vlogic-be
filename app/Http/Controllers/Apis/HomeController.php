<?php

namespace App\Http\Controllers\Apis;

use App\Models\Media;
use App\Models\Slider;
use App\Models\Service;
use App\Models\SliderPhoto;
use App\Models\FrontendPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\ServiceCollection;
use App\Http\Resources\Service as ServiceResources;

class HomeController extends Controller
{
    public function index()
    {

        $slider = Slider::where('slider_name', 'home')->first();
        if (!$slider) {
            return response()->json(['Message' => 'Slider not found'], 404);
        }

        $media_id = SliderPhoto::where('sliders_id', $slider->id)->pluck('media_id')->toArray();
        if (empty($media_id)) {
            return response()->json(['Message' => 'No media found for this slider'], 404);
        }

        $media = Media::whereIn('id', $media_id)->get();
        if ($media->isEmpty()) {
            return response()->json(['Message' => 'Media not found'], 404);
        }

        $page_details = FrontendPage::where('slug', 'home')->first();
        if (!$page_details) {
            return response()->json(['Message' => 'Page details not found'], 404);
        }

        $services = Service::select('name', 'title', 'id', 'slug', 'featured_image_id', 'banner_image_id')
            ->with(['featured_image', 'banner_image'])
            ->where('status', 1)
            ->orderBy('priority', 'DESC')
            ->get();
        if ($services->isEmpty()) {
            return response()->json(['Message' => 'Services not found'], 404);
        }

        return response()->json([
            'success' => true,
            'slider' => $slider,
            'page_details' => $page_details,
            'services' => new ServiceCollection($services),

        ]);
    }
}
