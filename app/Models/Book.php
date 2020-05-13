<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable =['username','email','phone','note','status','guest','nights','id_room','check_in','check_out','total','id_user'];
    protected $dates = ['created_at','deleted_at','updated_at'];

    public function room()
    {
        return $this->belongsTo(Room::class,'id_room');
    }
}
