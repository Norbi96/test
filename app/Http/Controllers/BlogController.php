<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $blogies = Blog::orderBy('id','desc')->paginate(5);
        return view('blogies.index', compact('blogies'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('blogies.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Blog::create($input);


        return redirect()->route('blogies.index')->with('success','Blog sikeresen létrehozva!');


    }

    public function show(Blog $blog)
    {
        return view('blogies.show',compact('blogies'));
    }

    public function edit(Blog $blog)
    {
        return view('blogies.edit',compact('blog'));
    }



    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }else{
            unset($input['image']);
        }

        $blog->update($input);

    return redirect()->route('blogies.index')->with('success','Sikeres frissítés!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Blog  $blog
    * @return \Illuminate\Http\Response
    */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogies.index')->with('success','Sikeresen törölve!');
    }
}
