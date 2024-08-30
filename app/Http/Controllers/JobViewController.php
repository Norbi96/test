<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Job;


class JobViewController extends Controller
{
    public function index()
    {
        $munkak = Job::orderBy('id','desc')->paginate(5);
        return view('job.index', compact('munkak'));
    }


    public function show($id)
    {
        $munkak = Job::find($id);
        return view('job.show', compact('munkak'));
    }

}
