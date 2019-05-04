@extends('layout')

@section('title', "Docente {$docente->id}")

@section('content')

    <div class="card">
        <h4 class="card-header"> Detalles de Docente</h4>
        <div class="card-body">

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Atributo</th>
            <th scope="col">Detalle</th>
        </tr>
        </thead>
        <tbody>
    </table>

    <table class="table">
        <tbody>
            <tr>
                <th scope="col">ID</th>
                <td>{{ $docente->getId()}}</td>
            </tr>
            <tr>
                <th scope="col">   Nombre</th>
                <td>{{ $docente->getNombre()}}</td>
            </tr>
            <tr>
                <th scope="col">   Nro.Documento</th>
                <td>{{ $docente->getDni()}}</td>
            </tr>
            <tr>
                <th scope="col">   Telefono</th>
                <td>{{ $docente->getTelefono()}}</td>
            </tr>
            <tr>
                <th scope="col">   Direccion</th>
                <td>{{ $docente->getDireccion()}}</td>
            </tr>

        </tbody>
    </table>
            <a href="{{ url ('/docentes/')}}" class="btn btn-primary"> <span class="oi oi-action-undo"></span>  Regresar </a>

@endsection