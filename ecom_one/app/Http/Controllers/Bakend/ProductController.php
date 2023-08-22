<?php

namespace App\Http\Controllers\Bakend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest('id')->select(['id', 'name', 'slug', 'image', 'category_id', 'producte_code', 'price', 'product_stock', 'alart_quantity', 'long_description', 'short_description', 'aditional_info', 'product_rating', 'is_active', 'updated_at'])->with('category_rlt', 'shipgins')->get();
        dd($products);
        return view('bakend.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('is_active', 1)->latest()->select(['id', 'title'])->get();
        return view('bakend.pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        //dd($request->all());
        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $file_name = $file->getClientOriginalName();

            $uploade = $file->storeAs('product', $file_name);
        }

        $strore = Product::create([
            'name' => $request->product_name,
            'slug' => Str::slug($request->product_name),
            'image' => $file_name,
            'category_id' => $request->product_category,
            'producte_code' => $request->product_code,
            'price' => $request->product_price,
            'product_stock' => $request->product_stock,
            'alart_quantity' => $request->product_quantity,
            'long_description' => $request->long_description,
            'short_description' => $request->short_description,
            'aditional_info' => $request->aditional_info,
            'is_active' => filled($request->is_active),
        ]);

        session()->flash('store', 'Product Add Successfull');
        return redirect()->route('create.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('is_active', 1)->latest('id')->select(['id', 'title'])->get();

        return view('bakend.pages.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        //dd($request->all());
        $old_img = $request->old_img;
        $old_img_location = 'public/storage/product/' . $old_img;
        //dd($old_img_location);

        $update = $product->update([
            'name' => $request->product_name,
            'slug' => Str::slug($request->product_name),
            'category_id' => $request->product_category,
            'producte_code' => $request->product_code,
            'price' => $request->product_price,
            'product_stock' => $request->product_stock,
            'alart_quantity' => $request->product_quantity,
            'long_description' => $request->long_description,
            'short_description' => $request->short_description,
            'aditional_info' => $request->aditional_info,
            'is_active' => filled($request->is_active),
        ]);
        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $file_name = $file->getClientOriginalName();

            if ($file_name != $old_img) {
                unlink(base_path($old_img_location));
            }
            $uploade = $file->storeAs('product', $file_name);
            $product->update([
                'image' => $file_name,
            ]);
        }

        session()->flash('update', 'Product Update Successfull');
        return redirect()->route('index.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $destroy = $product->delete();

        session()->flash('destroy', 'Product Delete Successfull');
        return redirect()->route('index.product');
    }
}
