
    @extends('layouts.app-master')


    @section('content')

        <h1>Inicio</h1>
        @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado a la pagina!</p>
        
        @endauth

        @guest
            <p>Por favor, <a href="/login">inicia sesion</a> para acceder a la pagina</p>
        @endguest
    
        
    @endsection
  
