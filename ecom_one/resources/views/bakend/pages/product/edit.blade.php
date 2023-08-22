@extends('bakend.layout.master')
@section('brd_content', 'Edit Product Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-10 m-auto">
            @if (session()->has('store'))
                <div class="alert alert-success">{{ session('store') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.product', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-gorup mb-3">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" value="{{ $product->name }}"  class="form-control">
                            @error('product_name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-gorup mb-3">
                            <label for="product_category">Product Category</label>
                            <select name="product_category" class="form-control form-select">
                                @foreach ($categories as $category)
                                    <option selected value="{{ $category->id }}">{{ $category->title }}</option>
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
                                    <input type="number" name="product_price" value="{{ $product->price }}" class="form-control" min="0">
                                    @error('product_price')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="product_code">Product code</label>
                                    <input type="text" name="product_code" value="{{ $product->producte_code  }}"
                                        class="form-control" min="0">
                                    @error('product_code')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="product_stock">Inital Stock</label>
                                    <input type="number" name="product_stock" value="{{ $product->product_stock }}" class="form-control" min="0">
                                    @error('product_stock')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="product_quantity">Alert quantity</label>
                                    <input type="number" name="product_quantity" value="{{ $product->alart_quantity }}" class="form-control" min="0">
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
                                    <textarea name="short_description" cols="30" rows="3" class="form-control">{{ $product->short_description }}</textarea>
                                    @error('short_description')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-gorup mb-3">
                                    <label for="aditional_info">Aditional Info</label>
                                    <textarea name="aditional_info"  cols="30" rows="3" class="form-control">{{ $product->aditional_info }}</textarea>
                                    @error('aditional_info')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-gorup mb-3">
                            <label for="long_description">Long Description</label>
                            <textarea name="long_description" cols="30" rows="10" class="form-control">{{ $product->long_description }}</textarea>
                            @error('long_description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="product_img">Product Image</label>
                            <input type="hidden" name="old_img" value="{{ $product->image }}">
                            
                            <input type="file" name="product_img" class="form-control" value="{{ $product->image }}">
                            @error('product_img')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-switch mb-3">
                            <input type="checkbox" @if($product->is_active) checked @endif class="form-check-input" id="exampleCheck1" name="is_active">
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
