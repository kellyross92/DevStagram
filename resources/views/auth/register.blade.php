@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram    
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center p-10">
        <div class="md:w-6/12">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register.store')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre:
                    </label>
                    <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Write your name"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 my-2 text-sm">* {{$message}}</p>
                    @enderror
                    
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username:
                    </label>
                    <input
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Write your Nickname"
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}"> 
                    @error('username')
                        <p class="text-red-500 my-2 text-sm">* {{$message}}</p>
                    @enderror                   
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email:
                    </label>
                    <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Write email"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">  
                    @error('email')
                        <p class="text-red-500 my-2 text-sm">* {{$message}}</p>
                    @enderror  

                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password:
                    </label>
                    <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Write your password"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">    
                    @error('password')
                        <p class="text-red-500 my-2 text-sm">* {{$message}}</p>
                    @enderror                  
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password:
                    </label>
                    <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Rewrite your password"
                    class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror">  
                    @error('password_confirmation')
                        <p class="text-red-500 my-2 text-sm">* {{$message}}</p>
                    @enderror                    
                </div>
                <input type="submit"
                    value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
    
@endsection