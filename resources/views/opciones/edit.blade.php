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
        <a href="" class="button">Cancelar Reserva</a><br>
        <a href="{{ route('layouts.plantilla') }}" class="button">Regresar</a>
    </tr>

@endsection


