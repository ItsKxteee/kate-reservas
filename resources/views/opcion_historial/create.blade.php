
@extends('layouts.plantilla')

@section('title', 'Historial')
    
@section('content')

    <h1 class="text-center">Historial de reservas</h1>

    <table border="1">
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
    
    
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Tipo</th>
                <th>Espacio de Estudio</th>
                <th>Fecha de Reserva</th>
                <th>Hora de Inicio</th>
                <th>Hora de Fin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mauro Valencia</td>
                <td>Profesor</td>
                <td>Salón B2</td>
                <td>26/02/25</td>
                <td>7 AM</td>
                <td>3 PM</td>
            </tr>
            <tr>
                <td>Ana González</td>
                <td>Estudiante</td>
                <td>Salón A1</td>
                <td>26/02/25</td>
                <td>9 AM</td>
                <td>12 PM</td>
            </tr>
            <tr>
                <td>Carlos López</td>
                <td>Profesor</td>
                <td>Salón C3</td>
                <td>26/02/25</td>
                <td>10 AM</td>
                <td>2 PM</td>
            </tr>
            <tr>
                <td>Laura Pérez</td>
                <td>Estudiante</td>
                <td>Salón B4</td>
                <td>26/02/25</td>
                <td>1 PM</td>
                <td>4 PM</td>
            </tr>
            <tr>
                <td>Juan Martínez</td>
                <td>Profesor</td>
                <td>Salón D5</td>
                <td>26/02/25</td>
                <td>8 AM</td>
                <td>12 PM</td>
            </tr>
        </tbody>
    </table>

@endsection
