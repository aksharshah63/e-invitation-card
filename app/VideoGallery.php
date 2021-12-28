<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoGallery extends Model
{
    use SoftDeletes;

    protected $table = "video_galleries";
    protected $fillable = [
        'link', 'wedding_id','sort'
    ];
}
