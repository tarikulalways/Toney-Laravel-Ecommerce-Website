@extends('bakend.layout.master')
@section('brd_content', 'Edit Testimonial Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-8 m-auto">
            {{-- @if (session()->has('store'))
                <div class="alert alert-success">{{ session('store') }}</div>
            @endif --}}
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.testimonial', ['testimonial' => $testimonial->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Client Name:</label>
                            <input type="text" name="name" value="{{ $testimonial->client_name }}" class="form-control">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Designation:</label>
                            <input type="text" name="designation" value="{{ $testimonial->client_designation }}" class="form-control">
                            @error('designation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Opinion:</label>
                            <textarea name="description" cols="10" rows="5" class="form-control">{{ $testimonial->description }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Image:</label>
                            <input type="hidden" name="old_img"  value="{{ $testimonial->client_img }}">
                            <input type="file" name="client_img" class="form-control">

                            @error('client_img')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-switch mb-3">
                            <input class="form-check-input" @if($testimonial->is_active) checked @endif type="checkbox" id="flexCheckDefault" name="is_active">
                            <label class="form-check-label" for="flexCheckDefault">
                                Active/InActive
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
