@extends('layout/header')
@section('title') {{'Admin'}} @endsection

@section('container')
@include('layout/navbar')

<!-- Content -->
<div class="container-fluid mt-2">
        <div class="row d-flex">

            <!-- Left side -->
            @include('layout/sidebar1')
            <!-- End left side -->

            <!-- Right side -->
            <div class="col mw-auto p-3">
                <div class="d-flex gap-2 mb-2 justify-content-start">
                    <p class="fs-4 fw-bold mb-3">Posts | </p>
                    <a href="{{ route('admin.create') }}" class="fs-4 text-decoration-none">Add a new post</a>
                </div>

                <table class="table table-bordered table-striped table-hover mt-3" id="example">
                    <thead>
                        <tr>
                            <th><b>#</b></th>
                            <th>Subject</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th>Date Posted</th>
                            <th>Last Edited</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        @forelse ($admin as $index => $data)
                        <tr>
                            <td><b>{{ $index +1 }}</b></td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->category }}</td>
                            <td>{!! Str::limit($data->content, 50, '...') !!}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>
                                <form action="{{ route('admin.destroy', $data->id) }}" method="post">
                                    <a href="{{ route('admin.show', $data->id) }}" target="_blank" class="btn btn-sm btn-success"><span class="fa-solid fa-eye"></span></a>
                                    <a href="{{ route('admin.edit', $data->id) }}" class="btn btn-sm btn-info text-white"><span class="fa-solid fa-pen"></span></a>

                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="deleteconfirm()"><span class="fa-solid fa-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No data record found</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- End right side -->

        </div>
    </div>
    <!--End ontent -->
    @endsection