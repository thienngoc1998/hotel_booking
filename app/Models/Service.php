<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable =['name','image','content','open_time','close_time','price'];
    protected $dates = ['created_at','deleted_at','updated_at'];
}
