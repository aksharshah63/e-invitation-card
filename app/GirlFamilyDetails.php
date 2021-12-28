<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GirlFamilyDetails extends Model
{
    use SoftDeletes;

    protected $table = "girl_family_details";
    protected $fillable = [
        'image', 'name', 'relationship','wedding_id','sort'
    ];
}
