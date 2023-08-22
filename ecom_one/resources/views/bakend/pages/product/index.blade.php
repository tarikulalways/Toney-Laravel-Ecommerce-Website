@extends('bakend.layout.master')
@section('brd_content', 'Product Details Page')

@section('admin_content')
    <div class="row">
        <div class="col-md-12 col-lg-12 m-auto">
            @if (session()->has('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
            @elseif(session()->has('destroy'))
                <div class="alert alert-danger">{{ session('destroy') }}</div>
            @endif
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Image</th>
                                <th scope="col">category</th>
                                <th scope="col">Code</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">LDes</th>
                                <th scope="col">SDes</th>
                                <th scope="col">Info</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Status</th>
                                <th scope="col">Update At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <img style="width:50px; border-radius:10px;" src="{{ asset('storage/product') }}/{{ $item->image }}" alt="{{ $item->image }}"
                                        class="d-block mx-auto">
                                </td>
                                <td>{{ $item->category_rlt->title }}</td>
                                <td>{{ $item->producte_code }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->product_stock }}</td>
                                <td>
                                    @if ($item->product_stock < $item->alart_quantity)
                                    <span class="badge badge-pill text-danger">LOW STOCK</span>
                                    @else
                                    <span class="badge badge-pill text-info">SELL</span>
                                    @endif
                                </td>
                                <td>{{ $item->long_description }}</td>
                                <td>{{ $item->short_description }}</td>
                                <td>{{ $item->aditional_info }}</td>
                                <td>{{ $item->product_rating }}</td>
                                <td>
                                    @if ($item->is_active)
                                        {{ 'Active' }}
                                        @else{{ 'InActive' }}
                                    @endif
                                </td>
                                <td>{{ $item->updated_at->diffForhumans() }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit.product', ['product' => $item->id]) }}" class="px-1 text-success">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="px-1 text-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('destroy.product', ['product' => $item->id]) }}" class="px-1 text-danger" onclick="alert('Are You Sure Delete Data?')">
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
