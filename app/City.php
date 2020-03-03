<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable= [ 'city' , 'country'];

    public function company()
    {
        return $this->hasOne('App\Company','cid');
    }

}
