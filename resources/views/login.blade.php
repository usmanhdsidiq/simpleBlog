@extends('layout/header')
@section('title') {{'Login'}} @endsection
@include('layout/navbar')
@section('container')
    <!-- Content -->
    <div class="container-md mt-5">
        <div class="row justify-content-center">
            <form action="/loginAction" method="POST" class="col-md-5 mw-auto p-3 align-self-center">
            {{ csrf_field() }}
                <h1 class="h3 mb-3 fw-normal">Sign In</h1>

                <div class="mb3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="mb3 mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <!-- <p class="text-end text-decoration-none"><a href="forgot.html">Forgot password</a></p> -->
                </div>

                <div class="mb-3">
                    @if(session('error'))
                    <p style="color: red;">{{session('error')}}</p>
                    @endif
                </div>

                <a href="{{ route('redirect') }}" class="mt-4 w-100 btn btn-lg btn-outline-info"><span class="fa-brands fa-google"></span> Sign in with Google</a>
                <button class="mt-4 w-100 btn btn-lg btn-info" type="submit" style="color: white;">Sign in</button>

                <p>Don't have an account? <a href="/register">Sign up</a></p>
            </form>
        </div>
    </div>
    <!--End ontent -->
@endsection