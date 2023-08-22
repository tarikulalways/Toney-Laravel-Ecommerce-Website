<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // testimonial info
        $testimonials = Testimonial::where('is_active',1)->latest('id')->limit(3)->select(['id', 'client_name', 'client_designation', 'description', 'client_img'])->get();

        // category info
        $categories = Category::where('is_active',1)->latest('id')->select(['id', 'title', 'cat_img'])->get();

        // latest product
        $products = Product::where('is_active', 1)->latest('id')->select(['id', 'name', 'slug', 'image', 'image_gallery', 'price', 'category_id', 'product_rating'])->get();

        // best selling product
        $best_product = Product::where('is_active', 1)->latest('id')->limit(4)->select(['id', 'name', 'slug', 'image', 'image_gallery', 'price', 'category_id', 'product_rating'])->get();

        // shope product

        // $shope_cats = Category::where('is_active', 1)->latest('id')->select(['id', 'title'])->withCount('product_rlt')->get();

        // dd($shope_cats);

        return view('frontend.pages.home', compact('testimonials', 'categories', 'products', 'best_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
