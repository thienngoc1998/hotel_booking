<?php

namespace App\Models;

use App\Star;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use  SoftDeletes;

    protected $table = 'rooms';
    protected $fillable =['name','description','avatar','amount_bed','id_cate','content','size','status','active','price','id_service','star'];
    protected $dates = ['created_at','deleted_at','updated_at'];


    public function category()
    {
        return $this->belongsTo(Category::class,'id_cate');
    }

}
