@extends('layouts.master')

@section('content')
    <h1>Añadir una Canción</h1>
    @if ($errors->any())
        <div class="bg-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('songs.store') }}" method="POST">
        @csrf
        <p>
            <label for="">ID Albúm:</label>
            <input type="text" name="album_id" value="{{ old('album_id') }}">
        </p>
        <p>
            <label for="">Nombre:</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label for="">Duración:</label>
            <input type="number" name="duration" value="{{ old('duration') }}">
        </p>
        <p>
            <label for="">Orden en el albúm:</label>
            <input type="number" name="order" value="{{ old('order') }}">
        </p>
        <p>
            <input type="submit" value="Añadir Canción">
        </p>
    </form>
@endsection
