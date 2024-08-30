<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $workers = Worker::orderBy('id','desc')->paginate(5);
        return view('workers.index', compact('workers'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('workers.create');
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
            'email' => 'required',
            'address' => 'required',
            'munkakor' => 'required',
        ]);
        
        Worker::create($request->post());

        return redirect()->route('workers.index')->with('success','Dolgozó sikeresen látrehozva!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\workers  $workers
    * @return \Illuminate\Http\Response
    */
    public function show(Worker $worker)
    {
        return view('workers.show',compact('workers'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Worker  $workers
    * @return \Illuminate\Http\Response
    */
    public function edit(Worker $worker)
    {
        return view('workers.edit',compact('worker'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Worker  $workers
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Worker $worker)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'munkakor' => 'required',
        ]);
        
        $worker->fill($request->post())->save();

        return redirect()->route('workers.index')->with('success','Sikeres frissítés!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Worker  $workers
    * @return \Illuminate\Http\Response
    */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index')->with('success','Sikeres törlés!');
    }
}