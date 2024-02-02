@extends('layout/header')
@section('title') {{'Profile'}} @endsection
@include('layout/navbar')
@section('container')
<!-- Content -->
<div class="container-md mt-5">
        <div class="row d-flex justify-content-center">
            <h1 class="h3 mb-3 fw-normal">Welcome, {{Auth::user()->name}}</h1>

            @include('layout/sidebar')

            <!-- Right side -->
            <div class="col-md-7 mw-auto p-3">
                <div class="d-block">
                    <h3 class="text-start">Account Details</h3>
                    <p class="text-end text-muted">{{Auth::user()->username}}</p>
                </div>
                
                <div class="text-start mt-4">
                    @if(Auth::user()->image)
                        <img src="{{ asset('storage/userImages/'.Auth::user()->image) }}" class="rounded" width="120" height="120">
                    @else
                        <img src="{{ asset('img/icons8-anonymous.svg') }}" class="rounded" width="120" height="120">
                    @endif
                    
                    <div class="d-print-table-row mt-4">
                        <h3>Name</h3>
                        <p class="fs-5 text-muted">{{Auth::user()->name}}</p>
                    </div>
                    <div class="d-print-table-row mt-4">
                        <h3>Email</h3>
                        <p class="fs-5 text-muted">{{Auth::user()->email}}</p>
                    </div>
                </div>

                <div class="text-end mt-2">
                    <a href="/profile/{{Auth::user()->id}}/edit" class="fs-5" style="text-decoration: none;">Edit profile</a>
                </div>
            </div>
            <!-- End right side -->

        </div>
    </div>
    <!--End ontent -->
@endsection