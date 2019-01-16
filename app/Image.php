<?php

namespace App;

use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    
    public function portfolio(){
    	return $this->belongsTo(Portfolio::class);
    }
}
