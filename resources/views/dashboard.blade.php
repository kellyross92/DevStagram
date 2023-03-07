@extends('layouts.app')

@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
    <div class="flex justify-center bg-orange-500 rounded-lg">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex bg-green-200 justify-center">
            <div class="md:w-8/12 bg-blue-300 justify-center">
                <img src="{{ asset('img/usuario.svg')}}" alt="Imagen de usuario">
            </div>
            <div class="md:w-8/12 bg-yellow-300 justify-center">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>

    </div>
@endsection