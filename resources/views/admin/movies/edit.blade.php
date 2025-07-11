@extends('admin.master')

@section('title', 'Edit Movie')

@section('content')
<div class="container mt-4">
    <h2>Edit Movie</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Fix the errors below:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Movie Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $movie->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control" required>{{ old('description', $movie->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" name="duration" class="form-control" value="{{ old('duration', $movie->duration) }}" required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" name="release_date" class="form-control" value="{{ old('release_date', $movie->release_date) }}" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (0 to 10)</label>
            <input type="number" name="rating" step="0.1" min="0" max="10" class="form-control" value="{{ old('rating', $movie->rating) }}" required>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>
            <select name="genre_id" class="form-select" required>
                <option value="">-- Select Genre --</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" @selected(old('genre_id', $movie->genre_id) == $genre->id)>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" name="language" class="form-control" value="{{ old('language', $movie->language) }}" required>
        </div>

        <div class="mb-3">
            <label for="cast" class="form-label">Cast</label>
            <textarea name="cast" rows="3" class="form-control" required>{{ old('cast', $movie->cast) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Movie</button>
        <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
