<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request->name);

        // Modificar el request

        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request,[
            'name' => 'required | max:30',
            'username' => 'required|unique:users|min:6|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'            
        ]);

        User::create([
            'name' => Str::upper($request->name),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    //Autenticacion de usuario
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

    // Otra de forma de autenticar
            auth()->attempt($request->only('email', 'password'));


        //redireccionando a la pagina de posts
        return redirect()->route('posts.index');
    }
}
