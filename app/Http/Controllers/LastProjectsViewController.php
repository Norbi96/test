<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductCategory;


class BlogViewController extends Controller
{
    public function index()
    {
        $bejegyzesek = ProductCategory::orderBy('id','desc')->paginate(5);
        return view('starting.index', compact('bejegyzesek'));
    }


    public function show($id)
    {
        $bejegyzes = ProductCategory::find($id);
        return view('starting.index', compact('bejegyzes'));
    }

}
