<?php
namespace App\Models;
use App\Models\BaseModel as Model;
class FrontendPageTestimonial extends Model
{
    protected $table = 'static_pages_testimonials';

    protected $fillable = ['frontend_page_id','testimonial_id'];

    protected $dates = ['created_at','updated_at'];


    public function testimonial()
    {
        return $this->belongsTo(Testimonial::class, 'testimonial_id');
    }

}
 