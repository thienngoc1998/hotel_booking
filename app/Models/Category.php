<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use  SoftDeletes;

    protected $table = 'categories';
    protected $fillable =['name','active'];
    protected $dates = ['created_at','deleted_at'];
}
