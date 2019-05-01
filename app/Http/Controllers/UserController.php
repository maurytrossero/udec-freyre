<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = [
            'pepe',
            'juan',
            'maria',
            'ale',
        ];

        return view('users',[
            'users'=>$users,
            'title'=>'listado de usuarios'
        ]);
    }

    public function show($id)
    {
        return "Mostrando detalles del usuario {$id}";
    }

    public function create()
    {
        return 'crear nuevo usuario';
    }
}
