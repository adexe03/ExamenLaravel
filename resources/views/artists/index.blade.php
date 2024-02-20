@extends('layouts.master')
@section('content')
    <h1>Listado de artistas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Enlace Albúm</th>
                <th>Número de albumes</th>
                <th>Número de canciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
