@extends('layouts.auth-master')

@section('content')

<form action="/register" method="POST">
    
    @csrf
    <h1>Registrarse</h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un usuario">
        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un correo electronico">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese una contraseña">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Repite la contraseña">
        <label for="exampleInputPassword1" class="form-label">Confirme su Contraseña</label>
        <div id="emailHelp" class="form-text">Nunca compartas esta informacion</div>
    </div>
    
        <button type="submit" value="Registrarse" class="btn btn-primary">Registrarse</button>

    <div>
        <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>

    </div>
</form>
@endsection