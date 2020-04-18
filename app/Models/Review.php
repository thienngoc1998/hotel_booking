<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['content', 'active', 'id_user', 'id_room'];
    protected $dates = ['created_at', 'deleted_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');

    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }
}

