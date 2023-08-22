@extends('bakend.layout.master')
@section('brd_content', 'Category Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-8 m-auto">
          @if (session()->has('store'))
                <div class="alert alert-success">{{ session('store') }}</div>
          @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" name="title">
                          @error('title')
                           <strong class="text-danger">{{ $message }}</strong>
                          @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="cat_img">Category Image:</label>
                            <input type="file" name="cat_img" class="form-control">
                        </div>
                        @error('cat_img')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="form-check mb-3">
                          <input type="checkbox" checked class="form-check-input" id="exampleCheck1" name="is_active">
                          <label class="form-check-label" for="exampleCheck1">Active/InActive</label>
                        </div>
                        <button type="submit" class="btn btn-success">Store</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
