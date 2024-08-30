<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $jobies = Job::orderBy('id','desc')->paginate(5);
        return view('job_controller.index', compact('jobies'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('job_controller.create');
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
            'jobplace' => 'required',
            'description_short',
            'description_long',
        ]);

        Job::create($request->post());

        return redirect()->route('job_controller.index')->with('success','Meló sikeresen létrehozva!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\job  $job
    * @return \Illuminate\Http\Response
    */
    public function show(Job $job)
    {
        return view('job_controller.show',compact('jobies'));
    }

    public function edit($id)
    {
       $job = Job::where('id',  '=', $id)->first();

       return view('job_controller.edit', compact('job'));
    }



    public function update(Request $request, $id)
    {
    $job = Job::where('id', '=', $id)->first();

    $job->update($request->all());

    return redirect()->route('job_controller.index')->with('success','Sikeres frissítés!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Job  $job
    * @return \Illuminate\Http\Response
    */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('job_controller.index')->with('success','Sikeresen törölve!');
    }
}
