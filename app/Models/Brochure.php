<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brochure extends Model
{
    use SoftDeletes;

    protected $table = 'brochures';

    protected $guarded = ['id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['created_at','updated_at'];

    public function brochure(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'brochure_id','id');
    }
    public function featured_image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id','id');
    }
}
