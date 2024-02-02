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

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="text-start mt-4">

                        <div class="d-print-table-row mt-4">
                            <label for="currentPassword" class="form-label">Current password</label>
                            <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                        </div>
                        <div class="d-print-table-row mt-4">
                            <label for="password" class="form-label">New password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-print-table-row mt-4">
                            <label for="cPassword" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" id="cPassword" name="cPassword" required>
                        </div>
                        <div class="d-print-table-row mt-3">
                            <p class="mt-3" id="msg"></p>
                        </div>

                    </div>

                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-info" style="color: white;">Change Password</button>
                    </div>
                </form>
            </div>
            <!-- End right side -->
        </div>
    </div>
    <!--End ontent -->
@endsection