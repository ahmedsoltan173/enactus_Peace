<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pots extends Model
{
    //
    protected $table="pots";
    protected $fillable=['name','phone','email','address','date','white','gray','black','yellow','blue','orange' ,'pink','purple','red','green','brown','comment', 'created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
