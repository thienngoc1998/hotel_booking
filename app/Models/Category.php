<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable =['name','active'];
    protected $dates = ['created_at','deleted_at'];
}
