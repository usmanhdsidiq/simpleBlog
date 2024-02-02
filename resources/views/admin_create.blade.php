@extends('layout/header')
@section('title') {{'New Post'}} @endsection
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
                    <p class="fs-4 fw-bold mb-3">Add a post</p>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="ckeditor"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="mb-3">
                            <p id="msg"></p>
                        </div>

                        <div class="mt-5 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End right side -->

        </div>
    </div>
    <!--End ontent -->
    @endsection