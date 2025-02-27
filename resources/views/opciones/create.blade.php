
@extends('layouts.plantilla')

@section('title', 'Reservar espacio')
    
@section('content')

    <h1 class="text-center">Reservar Espacio de Estudio</h1>

    <table border="1">
        <br><br>
        <tr>
            <td>Nombre completo de usuario</td>
            <td><input type="text" name="name" placeholder="Nombre del usuario"></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><input type="text" name="correo" placeholder="@gmail.com"></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input id="Contra" type="password" name="Contraseña" placeholder="Contraseña"></td>
        </tr>
        <style>
            body {
                background: linear-gradient(to bottom,#930000, #e44545);
                color: white;
                font-family: Arial, sans-serif;
                text-align: center;
            }
            .container {
                margin-top: 50px;
            }
            select {
                background-color: #600;
                color: white;
                border: 2px solid #800;
                padding: 10px;
                font-size: 16px;
                border-radius: 5px;
                width: 200px;
            }
            select:focus {
                outline: none;
                border-color: #a00;
            }
            input, select {
            width: 200px;
            padding: 5px;
            margin: 5px;
            border-radius: 5px;
            border: none;
        }
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
    </head>
    <body>
        <div class="container">
            <label for="espacio">Selecciona un espacio:</label>
            <select id="espacio">
                <option value="aula">Aula</option>
                <option value="sala">Sala de reuniones</option>
                <option value="cubiculo">Cubículo</option>
            </select>
        </div>
        <tr>
            <td>Fecha de reserva</td>
            <td><input id="fecha" type="date" name="fecha" placeholder="dd/mm/aa"></td>
        </tr>
    </table>

    <tr>
        <div class="text-center">
            <button onclick="confirmarReserva()">Confirmar Reserva</button>

    <script>
        function confirmarReserva() {
            alert("Reserva hecha");
        }
    </script>
            <a href="{{ route('layouts.plantilla') }}" class="button">Regresar</a>
        </div>
    </tr>
    

@endsection
