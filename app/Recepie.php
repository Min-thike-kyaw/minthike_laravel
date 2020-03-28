<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{
    // protected $table ='recepie';

    protected $fillable=['name','ingredients','category'];

    // protected $guarded=[];
}
