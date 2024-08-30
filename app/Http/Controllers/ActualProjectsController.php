<?php

namespace App\Http\Controllers;
use App\Models\ActualProjects;
use Illuminate\Http\Request;

class ActualProjectsController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $actulies = ActualProjects::orderBy('id','desc')->paginate(5);
        return view('actulies.index', compact('actulies'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('actulies.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        ActualProjects::create($request->post());

        return redirect()->route('actulies.index')->with('success','Aktuál sikeresen létrehozva!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\blog  $actual
    * @return \Illuminate\Http\Response
    */
    public function show(ActualProjects $actual)
    {
        return view('actulies.show',compact('actulies'));
    }

    public function edit($id)
    {
       $actual = ActualProjects::where('id',  '=', $id)->first();

       return view('actulies.edit', compact('actual'));
    }



    public function update(Request $request, $id)
    {
    $actual = ActualProjects::where('id', '=', $id)->first();

    $actual->update($request->all());

    return redirect()->route('actulies.index')->with('success','Sikeres frissítés!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Blog  $actual
    * @return \Illuminate\Http\Response
    */
    public function destroy(ActualProjects $actual)
    {
        $actual->delete();
        return redirect()->route('actulies.index')->with('success','Sikeresen törölve!');
    }
}
