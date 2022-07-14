<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Packets extends Model
{
    //
    protected $table="packets";
    protected $fillable=['name','phone','email','address','date','type','shelter','data_rec','amount','comment','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
