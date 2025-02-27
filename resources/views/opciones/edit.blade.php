@extends('layouts.plantilla')

@section('title', 'Cancelar Reserva')

@section('content')

    <h1>Cancelar Reserva</h1>
    
    <table border="1">
        <tr>
            <td>Validación de correo electrónico</td>
            <td><input type="text" name="Email" placeholder="Email"></td>
        </tr>
        <br> <br>
        <tr>
            <td>Contraseña</td>
            <td><input id="Contraseña" type="password" name="contraseña" placeholder="Contraseña Actual"></td>
        </tr>
        <tr>
            <td>ID de espacio reservado</td>
            <td><input id="ID" type="text" name="ID" placeholder="ID"></td>
        </tr>
        <tr>
            <td>Fecha de la reserva hecha</td>
            <td><input id="reserva" type="date" name="reserva" placeholder="dd/mm/aa"></td>
        </tr>
    </table>
    
    <tr>
        <button onclick="cancelarReserva()">Cancelar Reserva</button>

    <script>
        function cancelarReserva() {
            alert("Reserva cancelada");
        }
    </script>
    <style>
        button {
           background-color: #740d0a; /* Color de fondo oscuro */
           color: white; /* Texto en color blanco */
           padding: 8px 16px; 
           font-size: 14px; /* Tamaño de fuente */
           border: none; /* Sin borde */
           border-radius: 5px; /* Bordes redondeados */
           cursor: pointer; /* Cambio de cursor */
           box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Sombra */
        }

        button:hover {
           background-color: #2a0000; 
        }
        </style>
        <br>
        <a href="{{ route('layouts.plantilla') }}" class="button">Regresar</a>
    </tr>

@endsection


