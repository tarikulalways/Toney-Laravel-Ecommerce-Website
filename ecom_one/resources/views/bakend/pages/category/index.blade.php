@extends('bakend.layout.master')
@section('brd_content', 'Category Details Page')

@section('admin_content')
    <div class="row">
        <div class="col-md-12 m-auto">
            @if (session()->has('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
                @elseif(session()->has('destroy'))
                <div class="alert alert-danger">{{ session('destroy') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Product</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Update At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->slug }}</td>
                                <td class="text-center">{{ $item->product_rlt_count }}</td>
                                <td>
                                    <img style="width:50px; border-radius:10px;" src="{{ asset('/storage/category') }}/{{ $item->cat_img }}"
                                        alt="{{ $item->cat_img }} " class="d-block mx-auto">
                                </td>
                                <td>
                                    @if ($item->is_active)
                                        {{ 'Active' }}
                                        @else{{ 'InActive' }}
                                    @endif
                                </td>
                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                <td>{{ $item->updated_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit.category', ['id' => $item->slug]) }}" class="px-1 text-success">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="px-1 text-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('destroy.category', ['id' => $item->slug]) }}" class="px-1 text-danger" onclick="alert('Are You Sure Delete Data?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
