<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = Product::where('is_active', 1)->latest('id')->select(['id', 'name', 'image', 'price', 'product_rating'])->get();

        $categories = Category::where('is_active', 1)->latest('id')->select(['id', 'title'])->with('product_rlt')->get();

        //dd($categories);
        return view('frontend.pages.shope', compact('categories', 'allProducts'));
    }

    public function single(Request $request){

        $single_products = Product::find($request);
        $single_cats = Category::select('title')->find($single_products);
        //dd($single_cats);
        return view('frontend.pages.single-product', compact('single_products', 'single_cats'));

    }

    public function addToCart(Request $request){
        dd($request->all());
    }

}
