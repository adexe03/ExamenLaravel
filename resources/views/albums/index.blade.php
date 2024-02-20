@extends('layouts.master')
@section('content')
    <h1>Listado de albumes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Año</th>
                <th>Artista</th>
                <th>Canciones</th>
                <th>Número de canciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->name }}</td>
                    <td>{{ $album->year }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="{{ route('albums.destroy', $album) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
