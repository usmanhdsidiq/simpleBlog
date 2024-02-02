@extends('layout/header')
@section('title') {{'Admin'}} @endsection

@section('container')
@include('layout/navbar')

<div class="container-md mt-2">
        <div class="row d-flex">
            <!-- Left side -->
            @include('layout/sidebar1')
            <!-- End left side -->

            <!-- Right Side -->
            <div class="col mw-auto p-3">
                <div class="card">
                    <div class="card-header" style="background-color: white;">
                        <h3 class="card-title fw-bold">{{ $admin->subject }}</h3>
                        <p class="text-muted">{{ $admin->category }}</p>
                        <p class="card-subtitle mb-3 fw-lighter fs-6 fst-italic">
                            Posted at: {{ $admin->created_at }} | Last modified: {{ $admin->updated_at}}
                        </p>

                        <form action="{{ route('admin.destroy', $admin->id) }}" method="post">
                            <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-sm btn-info text-white"><span class="fa-solid fa-pen"></span> Edit</a>

                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="deleteconfirm()"><span class="fa-solid fa-trash"></span> Delete</button>
                        </form>
                        
                    </div>
                    <div class="card-body">

                        <div class="d-grid d-md-flex justify-content-center mb-2">
                            <img src="{{ asset('images/'.$admin->image) }}" class="img-fluid imageShow" width="512" height="480">
                        </div>

                        <p class="card-text fw-bold mb-0">{!! $admin->content !!}</p>
                        
                    </div>
                </div>
            </div>
            
            <!-- End right side -->

        </div>
    </div>
@endsection