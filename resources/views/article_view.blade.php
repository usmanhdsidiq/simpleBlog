@extends('layout/header')
@section('title') {{'Home'}} @endsection
@section('container')
@include('layout/navbar')

    <!-- Content -->
    <div class="container-md mt-5">
        <div class="row d-flex justify-content-center">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title fw-bold">{{ $article->subject }}</h3>
                    <p class="text-muted">{{ $article->category }}</p>
                    <p class="card-subtitle mb-3 fw-lighter fs-6 fst-italic">
                        Submitted at: {{ $article->created_at }} | Modified at: {{ $article->updated_at }}
                    </p>

                    <div class="d-grid d-md-flex justify-content-center mb-2">
                        <img src="{{ asset('images/'.$article->image) }}" class="img-fluid imageShow" width="512" height="480">
                    </div>
                    
                    <p class="card-text fw-bold mb-0">{!! $article->content !!}</p>
                </div>
            </div>

        </div>
    </div>
    <!--End ontent -->
@endsection