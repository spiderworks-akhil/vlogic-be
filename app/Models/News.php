<?php

namespace App\Models;

use App\Http\Resources\Media as ResourcesMedia;
use App\Models\BaseModel as Model;
use App\Models\Media;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use SoftDeletes;

    protected $table = 'news';

    protected $guarded = ['id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['created_at','updated_at'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }


    public function media() {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }
}
