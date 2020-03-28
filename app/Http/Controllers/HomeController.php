<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$name="home page myamar laravel";
     	return view('home',compact('name'));
    }

    public function jsPage(){
    	$data=array(
    		'lesson1'=>"This is Js lesson1",
    		'lesson2'=>"This is Js lesson2",
    		'lesson3'=>"THis is js lesson3",
    	);
    	return view('js',compact('data'));

    }



    public function phpPage(){
    	$data1=array(
    		'lesson1'=>"This is php lesson1",
    		'lesson2'=>"This is php lesson2",
    		'lesson3'=>"THis is php lesson3",
    	);
    	return view('php',compact('data1'));

    }
}



