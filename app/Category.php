<?php

namespace App;

use App\Recepie;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";

    	public function recepie()
    	{
    		return $this->hasMany(Recepie::class,'category');
    	}
    
}
