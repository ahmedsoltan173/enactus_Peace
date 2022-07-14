<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table="contact";
    protected $fillable=['name','email','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
