@extends('bakend.layout.master')
@section('brd_content', 'Testimonial Single View Page')

@section('admin_content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <img style="width: 18rem;" src="{{ asset('/storage/testimonial') }}/{{ $testimonial->client_img }}"
                    alt="" class="card-img-top m-auto mt-3">
                <strong class="text-center pt-3">{{ $testimonial->client_img }}</strong>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Property</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $testimonial->client_name }}</td>
                            </tr>
                            <tr>
                                <td>Slug</td>
                                <td>{{ $testimonial->slug }}</td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>{{ $testimonial->client_designation }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $testimonial->description }}</td>
                            </tr>
                            <tr>
                                <td>Img Name</td>
                                <td>{{ $testimonial->client_img }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($testimonial->is_active)
                                        {{ 'Active' }}
                                        @else{{ 'InActive' }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Created_at</td>
                                <td>{{ $testimonial->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td>Updated_at</td>
                                <td>{{ $testimonial->updated_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('index.testimonial') }}" class="btn btn-success"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
