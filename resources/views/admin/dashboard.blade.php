@extends('admin.master')

@section('content')

<!-- Dashboard Greeting -->
<div class="mb-4">
    <h2 class="fw-bold">🎬 IMDV Admin Panel</h2>
    <p class="text-muted">Manage your platform at a glance.</p>
</div>

<!-- Dashboard Stats Cards -->
<div class="row g-4">
    <div class="col-md-3">
        <div class="card bg-light border-info shadow-sm h-100">
            <div class="card-body text-center">
                <i class="fas fa-users fa-2x text-info mb-2"></i>
                <h6 class="card-title">Total Users</h6>
                <h3 class="fw-bold">{{ $statistics['totalUsers'] }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light border-success shadow-sm h-100">
            <div class="card-body text-center">
                <i class="fas fa-layer-group fa-2x text-success mb-2"></i>
                <h6 class="card-title">Total Genres</h6>
                <h3 class="fw-bold">{{ $statistics['totalGenres'] }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light border-warning shadow-sm h-100">
            <div class="card-body text-center">
                <i class="fas fa-video fa-2x text-warning mb-2"></i>
                <h6 class="card-title">Total Movies</h6>
                <h3 class="fw-bold">{{ $statistics['totalMovies'] }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-light border-danger shadow-sm h-100">
            <div class="card-body text-center">
                <i class="fas fa-eye fa-2x text-danger mb-2"></i>
                <h6 class="card-title">Movies Watched</h6>
                <h3 class="fw-bold">{{ $statistics['totalMoviesWatched'] }}</h3>
            </div>
        </div>
    </div>
</div>

<!-- Recent Movies -->
<div class="card mt-5 shadow-sm">
    <div class="card-header bg-white fw-bold">
        🎞️ Recent Movies
    </div>
    <div class="card-body">
        @if(count($movies) > 0)
            <ul class="list-group">
                @foreach($movies as $movie)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $movie->name }}
                        
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">No recent movies found.</p>
        @endif
    </div>
</div>

@endsection
