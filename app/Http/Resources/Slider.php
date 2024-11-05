<?php

namespace App\Http\Resources;

use App\Models\SliderPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Slider extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'slider_name' => $this->slider_name,
            'slider_photos' => $this->slider_photos(),

        ];

    }
    private function slider_photos()
    {
        $slider_id = Slider::where('slider_name', 'home')->pluck('id')->first();
        $slider_photos = SliderPhoto::where('sliders_id',$slider_id)->get();

        return new Slider_photosCollection($slider_photos);
    }


}
