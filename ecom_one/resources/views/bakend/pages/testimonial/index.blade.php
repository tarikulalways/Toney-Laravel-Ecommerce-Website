@extends('bakend.layout.master')
@section('brd_content', 'Testimonial Details Page')

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
                                <th scope="col">Designation</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Update At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonial as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->client_name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->client_designation }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td style="width:5px; height:5px;">
                                        <img src="{{ asset('/storage/testimonial') }}/{{ $item->client_img }}"
                                            alt="{{ $item->client_img }}" class="img-fluid rounded -circle">
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
                                        <a href="{{ route('edit.testimonial', ['testimonial' => $item->id]) }}"
                                            class="px-1 text-success">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('show.testiimonial', ['testimonial' => $item->id]) }}" class="px-1 text-info">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('destroy.testimonial', ['testimonial'=>$item->id]) }}" class="px-1 text-danger"
                                            onclick="alert('Are You Sure Delete Data?')">
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
