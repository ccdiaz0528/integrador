<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicacion De Login</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <style>
        body{
            margin: 0; /* Sin márgenes en el body */
            height: 100vh; /* Altura completa de la ventana */
        }
        .form-container{
            width: 400px;
            margin: 50px auto; /* Centra el formulario en horizontal */
            position: relative; /* Asegura que el contenedor se mantenga en su posición */
            top: 0; /* Elimina cualquier desplazamiento */
        }
    </style>
</head>
<body>
    @include('layouts.partials.navbar')
    <main class="form-container">
        @yield('content')

    </main>

    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>