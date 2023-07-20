@extends('layouts.app')


@section('header-content')
            <h1>
                 My MOVIES
            </h1>
@endsection
@section('main-content')

            
            <section class="container">
                <div class="row">
                    @foreach($movies as $movie)
                    <div class="col-3">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Movie</div>
                                <div class="card-body text-success">
                                    <h5 class="card-title">{{ $movie->title }}</h5>
                                    <p class="card-text">{{ $movie->original_title }}</p>
                                    <p class="card-text">{{ $movie->nationality }}</p>
                                    <p class="card-text">{{ $movie->date }}</p>
                                    <p class="card-text">{{ $movie->vote }}</p>
                                </div>
                            </div> 
                        </div>
                    @endforeach
                </div>
            </section>
@endsection                

