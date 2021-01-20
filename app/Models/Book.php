<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
   protected $tabel='books';
   protected $fillable=['name','upload_file','image','discription','category_id','created_at','updated_at'];
   protected $hidden =['created_at','updated_at'];
   
    public function categories(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function readers(){
       return  $this->belongsToMany('App\Models\Reader','reader_books','book_id','reader_id','id','id');

    }
}
