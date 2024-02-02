@extends('layout/header')
@section('title') {{'Home'}} @endsection
@section('container')
@include('layout/navbar')

            <!-- Left side -->
            <div class="col-xl-12">
                <div class="container-md mt-5">
                    <div class="row justify-content-center">
                            
                            @foreach($article as $data)
                            <div class="col-sm-4 mt-3">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{ asset('images/'.$data->image) }}" class="card-img">
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('article.show', $data->id) }}" class="fw-bold text-decoration-none text-primary fs-5"><h5 class="card-title">{{ $data->subject }}</h5></a>
                                        <p class="card-subtitle">{{ $data->category }}</p>
                                        <p class="card-text">{{ Str::limit($data->content, 50, ' . . .') }}</p>
                                        
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="{{ route('article.show', $data->id) }}" class="btn btn-primary btn-sm" type="button">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
            
                    </div>
                </div>

            </div>
            <!-- End left side -->
@endsection