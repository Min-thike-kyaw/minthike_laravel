<?php

namespace App\Http\Controllers;

use App\Category;
use App\Recepie;
use Illuminate\Http\Request;

class RecepieController extends Controller
{       
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Recepie::where('author_id',auth()->id())->get();
        // dd(auth()->check());

        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd(request()->all());
          $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',
        //'author_id' =>
    ]);
        // $recepie = new Recepie();

        // $recepie->name=request()->name;
        // $recepie->ingredients=request()->ingredients;
        // $recepie->category=request()->category;

        // $recepie->save();
           Recepie::create($validatedData + ['author_id'=> auth()->id()]);

          // Recepie::create([
          //   'name'=>request()->name,
          //   'ingredients'=>request()->ingredients,
          //   'category'=>request()->category,

        //]);


        return redirect('recepie');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recepie $recepie)
    { 
        $this->authorize('view',$recepie);
        return view('show',compact('recepie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recepie $recepie)
    {
        $category=Category::all();
        return view('edit',compact('recepie','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Recepie $recepie)
    {

        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',

    ]);

        //   $recepie =Recepie::find($recepie->id);

        // $recepie->name=request()->name;
        // $recepie->ingredients=request()->ingredients;
        // $recepie->category=request()->category;

        // $recepie->save();
        $recepie->update(request()->all());


        return redirect('recepie');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recepie $recepie)
    {
        $recepie->delete();
        return redirect("recepie");
    }
}
