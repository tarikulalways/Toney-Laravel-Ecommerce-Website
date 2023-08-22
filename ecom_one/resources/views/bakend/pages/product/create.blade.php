@extends('bakend.layout.master')
@section('brd_content', 'Product Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-10 m-auto">
            @if (session()->has('store'))
                <div class="alert alert-success">{{ session('store') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-gorup mb-3">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                            @error('product_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-gorup mb-3">
                            <label for="product_category">Product Category</label>
                            <select name="product_category" class="form-control form-select">
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('product_category')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="product_price">Product Price</label>
                                    <input type="number" name="product_price" class="form-control" min="0">
                                    @error('product_price')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="product_code">Product code</label>
                                    <input type="text" name="product_code" placeholder="enter your unique product codde"
                                        class="form-control" min="0">
                                    @error('product_code')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="product_stock">Inital Stock</label>
                                    <input type="number" name="product_stock" class="form-control" min="0">
                                    @error('product_stock')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="product_quantity">Alert quantity</label>
                                    <input type="number" name="product_quantity" class="form-control" min="0">
                                    @error('product_quantity')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-gorup mb-3">
                                    <label for="short_description">Short Description</label>
                                    <textarea name="short_description" placeholder="Short Descrption" cols="30" rows="3" class="form-control"></textarea>
                                    @error('short_description')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-gorup mb-3">
                                    <label for="aditional_info">Aditional Info</label>
                                    <textarea name="aditional_info" placeholder="Aditional Informations" cols="30" rows="3" class="form-control"></textarea>
                                    @error('aditional_info')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-gorup mb-3">
                            <label for="long_description">Long Description</label>
                            <textarea name="long_description" placeholder="Long Descrption" cols="30" rows="10" class="form-control"></textarea>
                            @error('long_description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product_img">Product Image</label>
                            <input type="file" name="product_img" class="form-control" multiple>
                            @error('product_img')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="formFileMultiple" class="form-label">Product Gallery Image</label>
                            <input class="form-control" type="file" name="gallery_img[]" id="formFileMultiple" multiple>
                        </div> --}}
                        <div class="form-switch mb-3">
                            <input type="checkbox" checked class="form-check-input" id="exampleCheck1" name="is_active">
                            <label class="form-check-label" for="exampleCheck1">Active/InActive</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
