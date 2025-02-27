@extends('layouts.plantilla')

@section('title', 'Opciones')

@section('content')

    <title>Iniciar Sesión</title>
    <style>
        body {
            background: linear-gradient(to bottom, #a00000, #d04040);
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .login-box {
            background-color: #800000;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            color: white;
        }
        input, select {
            width: 200px;
            padding: 5px;
            margin: 5px;
            border-radius: 5px;
            border: none;
        }
        .button {
            background-color: #400000;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <div class="login-box">
        <form action="login.php" method="POST">
            <label for="email">Ingrese su correo electrónico:</label><br>
            <input type="email" id="email" name="email" placeholder="@gmail.com" required><br>
            
            <label for="password">Ingrese su contraseña:</label><br>
            <input type="password" id="password" name="password" placeholder="Contraseña" required><br>
            
            <label for="tipo_usuario">Tipo de usuario:</label><br>
            <select id="tipo_usuario" name="tipo_usuario">
                <option value="alumno">Alumno</option>
                <option value="profesor">Profesor</option>
            </select><br>
            
            <button type="submit" class="button">Iniciar Sesión</button>
        </form>
    </div>
    <a href="{{ route('layouts.plantilla') }}" class="button">Regresar</a>

@endsection