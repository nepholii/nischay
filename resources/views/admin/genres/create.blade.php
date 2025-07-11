@extends('admin.master')

@section('title', 'Create Genre')

@section('content')
<div class="container mt-4">
    <h2>Create New Genre</h2>

    {{-- Show Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.genres.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Genre Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Create Genre</button>
        <a href="{{ route('admin.genres.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
