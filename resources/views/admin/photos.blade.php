@extends('layouts.app')

@section('content')
    <h1>Kelola Foto</h1>

    @if (session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <div style="display:flex; gap:20px; flex-wrap:wrap;">
        @foreach ($photos as $photo)
            <div style="border:1px solid #ccc; padding:10px;">
                <img src="{{ asset('storage/photos/' . $photo->filename) }}" alt="Foto {{ $photo->position }}" width="150">
                <form action="{{ route('admin.photos.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo" required>
                    <button type="submit">Update Foto</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
