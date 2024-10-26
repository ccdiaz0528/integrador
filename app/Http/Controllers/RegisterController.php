<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view("auth.register");
    }

    public function register(RegisterRequest $request){
    $user = User::create($request->validated());
    return redirect('/login')->with('success', 'Cuenta Creada Con Exito!');
    }


}