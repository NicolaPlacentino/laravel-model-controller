@extends('layouts.main')

@section('main-content')
    <div class="container py-3">
        <h1 class="mb-4">Movies</h1>
        <section class="card-section">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Original Title</h6>
                  <p class="card-text mb-1">Nationality</p>
                  <span class="card-link">date</span>
                  <span class="card-link">vote</span>
                </div>
              </div>
        </section>
    </div>
@endsection