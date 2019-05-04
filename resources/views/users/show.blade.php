@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1>Usuario #{{ $user->id }}</h1>

    <p> Mostrando detalle del usuario: {{ $user->id}}</p>
    <p> Nombre: {{ $user->name}} </p>
    <p> Email: {{ $user->email}} </p>
    <p> Telefono: {{ $user->telefono}} </p>
    <p> Dirección: {{ $user->direccion}} </p>
    <p> DNI: {{ $user->DNI}} </p>

    <a href="{{ url ('/usuarios/')}}"> Regresar </a>



@endsection
