@extends('bakend.layout.master')
@section('brd_content', 'Edit Category Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update.category', ['id'=> $cat_slug->slug])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $cat_slug->title }}" name="title">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="hidden" name="old_cat_img" value="{{ $cat_slug->cat_img }}">
                            <label for="cat_img">Category Image:</label>
                            <input type="file" name="cat_img" id="" class="form-control">
                            @error('cat_img')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" @if($cat_slug->is_active) checked @endif class="form-check-input" id="exampleCheck1" name="is_active">
                            <label class="form-check-label" for="exampleCheck1">Active/InActive</label>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
