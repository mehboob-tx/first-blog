<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
	
   	protected $fillable= [ 'name' , 'address' , 'phone' , 'employe' , 'cid'];

   	
    public function city()
    {
        return $this->belongsTo('App\City','cid','id');
    }

}
