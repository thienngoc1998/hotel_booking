<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable =['title','desc','content','img','id_admin'];
    protected $dates = ['created_at','updated_at'];
}
