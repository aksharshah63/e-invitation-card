<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occasion extends Model
{
    use SoftDeletes;

    protected $table = "occasions";
    protected $fillable = [
        'name', 'date', 'time','AM_PM','description','location','image','sort','wedding_id'
    ];

    public static $status=[
        'AM' => 'AM',
        'PM' => 'PM'
    ];
}
