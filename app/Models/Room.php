<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use  SoftDeletes;

    protected $table = 'rooms';
    protected $fillable =['name','description','avatar','amount_bed','id_cate'];
    protected $dates = ['created_at','deleted_at','updated_at'];

    public function detail()
    {
        return $this->belongsTo(RoomDetail::class, 'id_room');
    }
}
