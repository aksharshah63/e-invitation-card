<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoyFamilyDetails extends Model
{
    use SoftDeletes;

    protected $table = "boy_family_details";
    protected $fillable = [
        'image', 'name', 'relationship','wedding_id','sort'
    ];
}
