
@extends('layouts.auth-master')

@section('content')

<form action="/login" method="POST">
    @csrf
    <h1>Iniciar Sesion</h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo o su usuario">
        <label for="exampleInputEmail1" class="form-label">Correo o Usuario</label>
         
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <div id="emailHelp" class="form-text">Nunca compartas esta informacion</div>
    </div>
    
        <button type="submit" value="Login" class="btn btn-primary">Iniciar Sesion</button>

    <div>
        <a href="/register">¿No tienes cuenta? Registrate</a>
    </div>
</form>
@endsection
