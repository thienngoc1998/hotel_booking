<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model
{
    protected $table = 'room-details';

    protected $fillable =['content','size','status','active','id_room','id_service'];

    protected $dates = ['created_at','deleted_at','updated_at'];

}
