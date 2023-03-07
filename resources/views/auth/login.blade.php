@extends('layouts.app')

@section('titulo')
    Tu cuenta    
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center p-10">
        <div class="md:w-6/12">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form novalidate>
                @csrf                
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
                <input type="submit"
                    value="Iniciar sesion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
    
@endsection