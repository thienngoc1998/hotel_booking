<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookService extends Model
{
    protected $table = 'book_services';
    protected $fillable =['id_book','id_service'];
    protected $dates = ['created_at','updated_at'];
}
