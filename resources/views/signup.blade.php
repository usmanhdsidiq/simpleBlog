@extends('layout/header')
@section('title') {{'Signup'}} @endsection
@include('layout/navbar')
@section('container')
    <!-- Content -->
    <div class="container-md mt-5">
        <div class="row justify-content-center">
            <form action="/registerAction" method="POST" class="col-md-5 mw-auto p-3 align-self-center">
                <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username <small class="text-end" style="color: red;">*Username cannot be changed</small></label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" minlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="cPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cPassword" id="cPassword" minlength="8" required>
                    <strong class="mt-3" id="msg"></strong>
                </div>

                <div class="mb-3">
                    @if(session('message'))
                    <p style="color: green;">{{session('message')}}<a href="/login"> Login</a> now.</p>
                    @endif
                </div>
    
                <button id="submit" class="mt-4 w-100 btn btn-lg btn-info" type="submit" style="color: white;" disabled>Sign up</button>
            </form>
        </div>
    </div>
    <!--End ontent -->
    @endsection