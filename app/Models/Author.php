<?php
namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $table = 'authors';

    protected $guarded = ['id', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['created_at','updated_at'];

}