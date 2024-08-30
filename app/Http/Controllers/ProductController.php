<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('products.show', compact('products'));
    }

    public function create(Request $request)
    {
        $uri = explode('/', $request->path());
        $categoryId = $uri[1];

        return view('products.create', compact('categoryId'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'netto' => 'required',
            'tax' => 'required',
            'brutto' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);




        Product::create($request->post());

        return redirect()->route('products.show', [$_REQUEST["category_id"]])->with('success','Termék sikeresen létrehozva!');
    }

    public function show(Request $request)
    {
        $uri = explode('/', $request->path());

        $categoryId = $uri[1];
        $products = Product::where('category_id', $categoryId)->paginate(5);

        return view('products.show',compact('products', 'categoryId'));

    }



    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'netto' => 'required',
            'tax' => 'required',
            'brutto' => 'required',
        ]);

        $product->fill($request->post())->save();

        return redirect()->route('products.show')->with('success','Termék sikeresen módosítva!');
    }








}
