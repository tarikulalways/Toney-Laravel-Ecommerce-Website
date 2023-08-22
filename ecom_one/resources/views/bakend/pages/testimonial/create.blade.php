@extends('bakend.layout.master')
@section('brd_content', 'Testimonial Page')
@section('admin_content')
    <div class="row">
        <div class="col-md-8 m-auto">
            @if (session()->has('store'))
            <div class="alert alert-success">{{ session('store') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store.testimonial') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Client Name:</label>
                            <input type="text" name="name" placeholder="Client Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Designation:</label>
                            <input type="text" name="designation" placeholder="Client Designation" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Opinion:</label>
                            <textarea name="description" placeholder="Client Opinion" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name">Client Image:</label>
                            <input type="file" name="client_img" class="form-control dropify file-upload">
                        </div>
                        <div class="form-switch mb-3">
                            <input class="form-check-input" checked type="checkbox" id="flexCheckDefault" name="is_active">
                            <label class="form-check-label" for="flexCheckDefault">
                                Active/InActive
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Store</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
