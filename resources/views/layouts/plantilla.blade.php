<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @yield('content')
    <h3>Elija una opción:</h3>

    <!-- Contenedor de botones -->
    <div class="button-container">
        <a href="{{ route('opciones.create') }}" class="button">Reservar un espacio</a>
        <a href="{{ route('opciones.index') }}" class="button">Iniciar Sesión</a>
        <a href="{{ route('opciones.edit', 0) }}" class="button">Cancelar Reservas</a>
        <a href="{{ route('opcion_historial.create') }}" class="button">Historial de Reservas</a>
        <a href="/" class="button">Ir a Home</a>
    </div>
</body>
</html>