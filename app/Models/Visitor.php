<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    protected $tabel='vistors';
    protected $fillable=['count','created_at','updated_at'];
   protected $hidden =['created_at','updated_at'];
}
