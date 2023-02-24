@extends('layouts.main')

@section('main-content')
    <div class="container py-3">
        <h1 class="mb-4">Movies</h1>
        <section class="card-section d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                        <p class="card-text mb-1">{{$movie->nationality}}</p>
                        <span class="card-link">{{$movie->date}}</span>
                        <span class="card-link">{{$movie->vote}}</span>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection