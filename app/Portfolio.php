<?php

namespace App;

use App\Image;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table='portfolios';

    public function image(){
    	return $this->hasMany('App\Image');
    }
}
