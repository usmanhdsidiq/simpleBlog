@extends('layout/header')
@section('title') {{'Profile'}} @endsection
@section('container')
<!-- Content -->
<div class="container-md mt-5">
        <div class="row d-flex justify-content-center">
            <h1 class="h3 mb-3 fw-normal">Welcome, Anonymous</h1>

            @include('layout/sidebar')

            <!-- Right side -->
            <div class="col-md-7 mw-auto p-3">
                <div class="d-block">
                    <h3 class="text-start">Profile Edit</h3>
                    <p class="text-end text-muted">Username</p>
                </div>

                <form action="/uploadimage/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="text-start mt-4">

                        <div class="d-print-table-row mt-4 input-group">
                            <input type="file" class="form-control" id="image" name="image">
                            <button type="submit" class="btn btn-outline-secondary">Upload</button>
                        </div>

                    </div>

                    <div class="text-end mt-2">
                        <a href="profileEdit.html" role="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- End right side -->

        </div>
    </div>
    <!--End ontent -->
@endsection