<?php
namespace App\Models;

use App\Models\BaseModel as Model;
use App\Traits\ValidationTrait;

class GalleryMedia extends Model
{

    public function __construct() {

        parent::__construct();
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gallery_medias';

    protected $fillable = array('galleries_id', 'upload_type', 'youtube_preview', 'youtube_url', 'media_id');

    protected $dates = ['created_at','updated_at'];


    protected function setRules() {

        $this->val_rules = array(
        );
    }

    protected function setAttributes() {
        $this->val_attributes = array(
        );
    }

    public function gallery() {
        return $this->belongsTo('App\Models\Gallery', 'galleries_id');
    }

    public function media() {
        return $this->belongsTo('App\Models\Media', 'media_id');
    }

}
