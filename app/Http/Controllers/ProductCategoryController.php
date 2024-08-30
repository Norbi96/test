<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productcategory = ProductCategory::orderBy('id','desc')->paginate(5);
        return view('productcategory.index', compact('productcategory'));
    }

    public function create()
    {
        return view('productcategory.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $postImage);
            $input['image2'] = "$postImage";
        }


        ProductCategory::create($input);

        return redirect()->route('productcategory.index')->with('success','Bejegyzés sikeresen létrehozva!');
    }


    public function show(ProductCategory $productcategory)
    {
        return view('productcategory.show',compact('productcategory'));
    }


    public function edit(ProductCategory $productcategory)
    {
        return view('productcategory.edit',compact('productcategory'));
    }



    public function update(Request $request, ProductCategory $productcategory)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        if ($image2 = $request->file('image2')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $postImage);
            $input['image2'] = "$postImage";
        }else{
            unset($input['image2']);
        }


        $productcategory->update($input);

        return redirect()->route('productcategory.index')->with('success','Sikeresen módosítva!');
    }

    public function destroy(ProductCategory $productcategory)
    {
        $productcategory->delete();
        return redirect()->route('productcategory.index')->with('success','Termékkategória sikeresen törölve!');
    }

}
