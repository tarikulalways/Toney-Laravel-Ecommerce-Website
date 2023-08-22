<?php

namespace App\Http\Controllers\Bakend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest('id')->withCount('product_rlt')->get();
        
        return view('bakend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bakend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $store = Category::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title)
        ]);

        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $file_name = $file->getClientOriginalName();

            $uploade = $file->storeAs('category', $file_name);
            //dd($file_name);
            $store->update([
                'cat_img' => $file_name
            ]);
        }

        session()->flash('store', 'Category Add Successfull!');
        return redirect()->route('create.category');

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
    public function edit($slug)
    {
        $cat_slug = Category::whereSlug($slug)->first();
        return view('bakend.pages.category.edit', compact('cat_slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $slug)
    {
        $old_img = $request->old_cat_img;
        $old_img_location = "/public/storage/category/$old_img";
        $update = Category::whereSlug($slug)->first();

        $update->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'is_active' => filled($request->is_active)
        ]);

        if($request->hasFile('cat_img')){
            $file = $request->file('cat_img');
            $file_name = $file->getClientOriginalName();

            if($file_name != $old_img){
                unlink(base_path($old_img_location));
            }
            $uploade = $file->storeAs('category', $file_name);
            $update->update([
                'cat_img' => $file_name
            ]);
        }

        session()->flash('update', 'Category Update Success');
        return redirect()->route('index.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destroy = Category::whereSlug($slug)->first();
        $destroy->delete();
        session()->flash('destroy', 'Category Delete Successfull');
        return redirect()->route('index.category');
    }
}
