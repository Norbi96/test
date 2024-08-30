<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductCategoryListController extends Controller
{
    public function index()
    {
        $productcategory = ProductCategory::orderBy('id','desc')->paginate(5);
        return view('market.index', compact('productcategory'));
    }


    public function show($id)
    {
        $productcategory = ProductCategory::find($id);
        return view('market.show', compact('productcategory'));
    }

}
