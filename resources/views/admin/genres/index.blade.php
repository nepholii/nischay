@extends('admin.master')

@section('title', 'All Genres')

@section('content')
<div class="container mt-4">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Header + Create Button --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Genre List</h2>
        <a href="{{ route('admin.genres.create') }}" class="btn btn-primary">+ Create Genre</a>
    </div>

    {{-- Genre Table --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genres as $genre)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <a href="{{ route('admin.genres.edit', $genre->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.genres.destroy', $genre->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this genre?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No genres found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
