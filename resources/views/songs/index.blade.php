@extends('layouts.master')
@section('content')
    <h1>Listado de canciones</h1>
    <p>
        <a href="{{ route('songs.create') }}">Añadir canción</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Duración</th>
                <th>Orden albúm</th>
                <th>Albúm</th>
                <th>Artista</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->name }}</td>
                    <td>{{ $song->duration }}</td>
                    <td>{{ $song->order }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
