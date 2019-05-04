<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>  </title>

</head>
<body>

    <h1> {{$title}} </h1>

    <ul>
        @if(!empty($users))
            @foreach ($users as $user)
                <li>  {{$user->name}}  ,  {{$user->email}}  ,  {{$user->direccion}}</li>
            @endforeach

        @else
            <p>No hay usuarios registrados</p>
        @endif
    </ul>

</body>
</html>
