<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    protected $table = 'stars';
    protected $fillable =['star','id_room'];
    protected $dates = ['created_at','updated_at'];
}
