<?php

namespace App\Http\Controllers\Bakend;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::latest()->get();
        return view('bakend.pages.testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bakend.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStoreRequest $request)
    {
        $store = Testimonial::create([
            'client_name' => $request->name,
            'slug' => Str::slug($request->name),
            'client_designation' => $request->designation,
            'description' => $request->description,
            'is_active' => filled($request->is_active)
        ]);

        if($request->hasFile('client_img')){

            $file = $request->file('client_img');
            $file_name = $file->getClientOriginalName();

            $upload = $file->storeAs('testimonial',$file_name);

            $store->update([
                'client_img' => $file_name
            ]);
        }
        session()->flash('store', 'Testimonial Uploaded Successfull');
        return redirect()->route('create.testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('bakend.pages.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('bakend.pages.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdateRequest $request, Testimonial $testimonial)
    {
        $old_img = $request->old_img;
        $old_img_location = "/public/storage/testimonial/$old_img";

        $update = $testimonial->update([
            'client_name' => $request->name,
            'slug' => Str::slug($request->name),
            'client_designation' => $request->designation,
            'description' => $request->description,
            'is_active' => filled($request->is_active)
        ]);

        if($request->hasFile('client_img')){
            $file = $request->file('client_img');
            $file_name = $file->getClientOriginalName();

            if($file_name != $old_img){
                unlink(base_path($old_img_location));
            }
            $upload = $file->storeAs('testimonial',$file_name);

            $testimonial->update([
                'client_img' => $file_name
            ]);
        }

        session()->flash('update', 'Testimonial Update Successfull');
        return redirect()->route('index.testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $old_img = $testimonial->client_img;
        $old_img_location = "/public/storage/testimonial/$old_img";

        $testimonial->delete();
        unlink(base_path($old_img_location));
        session()->flash('destroy', 'Testimonial Delete Successfull');
        return redirect()->route('index.testimonial');
    }
}
