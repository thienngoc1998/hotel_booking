<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable =['name','description','avatar','amount_bed','id_cate'];
    protected $dates = ['created_at','deleted_at'];
}
