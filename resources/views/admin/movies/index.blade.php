@extends('admin.master')

@section('title', 'All Movies')

@section('content')
<div class="container mt-4">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Create Button --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Movie List</h2>
        <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">+ Create Movie</a>
    </div>

    {{-- Movie Table --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Rating</th>
                <th>Language</th>
                <th>Cast</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->genre->name ?? 'N/A' }}</td>
                    <td>{{ $movie->duration }} mins</td>
                    <td>{{ $movie->release_date }}</td>
                    <td>{{ $movie->rating }}/10</td>
                    <td>{{ $movie->language }}</td>
                    <td>{{ $movie->cast }}</td>
                    <td>
                        <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this movie?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No movies found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
