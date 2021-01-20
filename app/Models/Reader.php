<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    //
    protected $table='readers';
    protected $fillable=['name','username','userpass','email','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public function books()
    {
       return $this->belongsToMany('App\Models\Book','reader_books','book_id','reader_id','id','id');
    }
}
