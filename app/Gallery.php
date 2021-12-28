<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $table = "gallery";
    protected $fillable = [
        'image', 'wedding_id','sort'
    ];
}
