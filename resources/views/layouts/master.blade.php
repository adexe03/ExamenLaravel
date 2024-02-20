<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Laravel</title>
</head>

<body>
    <header>
        <div>
            <a href="/">Inicio</a>
            <a href="{{ route('artists.index') }}">Artistas</a>
            <a href="{{ route('albums.index') }}">Albumes</a>
            <a href="{{ route('songs.index') }}">Canciones</a>
        </div>
    </header>
    <main>
        @section('content')
            <h1>Bienvenido al programa para gestionar los albumes de tus artistas favoritos</h1>
        @show
    </main>
    <footer>
        <p>Pié de página</p>
    </footer>
</body>

</html>
