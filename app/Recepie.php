<?php

namespace App;

use App\Category;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{
    // protected $table ='recepies';

    protected $fillable=['name','ingredients','category','author_id'];

    // protected $guarded=[];
    public function categories()
    	{
    		return $this->belongsTo(Category::class,'category');
    	}
}
