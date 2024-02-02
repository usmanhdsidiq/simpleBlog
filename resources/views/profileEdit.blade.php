@extends('layout/header')
@section('title') {{'Profile'}} @endsection
@include('layout/navbar')
@section('container')

<!-- Content -->
<div class="container-md mt-5">
        <div class="row d-flex justify-content-center">
            <h1 class="h3 mb-3 fw-normal">Welcome, {{ $user->name }}</h1>
            
            @include('layout/sidebar')
            <!-- Right side -->
            <div class="col-md-7 mw-auto p-3">
                <div class="d-block">
                    <h3 class="text-start">Profile Edit</h3>
                    <p class="text-end text-muted">{{ $user->username }}</p>
                </div>

                <form action="/profileupdate/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    <div class="text-start mt-4">
                    {{ csrf_field() }}
                    @if($user->image)
                        <img src="{{ asset('storage/userImages/'.$user->image) }}" class="rounded" width="120" height="120">
                    @else
                        <img src="{{ asset('img/icons8-anonymous.svg') }}" class="rounded" width="120" height="120">
                    @endif
                        <a href="/changeimage" style="text-decoration: none;">Update image</a>
                        <div class="d-print-table-row mt-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="d-print-table-row mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>

                    </div>

                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-info" style="color: white;">Update Profile</button>
                        <a href="/profile" role="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- End right side -->

            </div>
    </div>
    <!--End ontent -->
@endsection