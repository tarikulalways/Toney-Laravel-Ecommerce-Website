<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\ShipingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShipingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quntities = ShipingCart::select(['id','product_qty', 'product_img', 'product_title', 'product_price'])->get();

        return view('frontend.pages.cart-details', compact('quntities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::select(['id', 'name', 'image', 'price'])->find($request->id);

        $store = ShipingCart::create([
            'product_qty' => $request->quntity,
            'product_id' => $product->id,
            'product_img' => $product->image,
            'product_title' => $product->name,
            'product_price' => $product->price
        ]);
        session()->flash('cart', 'Product cart page added successfull');
        return redirect()->route('index.shope');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipingCart  $shipingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShipingCart $shipingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipingCart  $shipingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipingCart $shipingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipingCart  $shipingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipingCart $shipingCart)
    {
        $shipingCart->update([
            'product_qty' => $request->updt_qyt
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipingCart  $shipingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipingCart $shipingCart)
    {
        $shipingCart->delete();
        return back();
    }
}
