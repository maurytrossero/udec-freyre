<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        $title= 'Listado de usuarios';

       return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = request()->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8'
            ],
            [
                'name.required' => 'El nombre es obligatorio',
                'email.required' => 'El email es obligatorio',
                'password.required' => 'La contraseña es obligatoria',
                'email.email' => 'Debe ingresar un email valido',
                'email.unique' => 'El email ingresado ya está registrado',
                'password.min' => 'La contraseña debe tener como minimo 8 caracteres',

            ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('usuarios');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => ''
            ], [
                'name.required' => 'El nombre es obligatorio',
                'email.required' => 'El email es obligatorio',
                'email.email' => 'Debe ingresar un email valido',
                'email.unique' => 'El email ingresado ya está registrado',
        ]);

        if($data['password'] != null)
        {
            $data['password'] = bcrypt($data['password']);
        }
        else
        {
            unset($data['password']);
        }


        $user->update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users');
    }

}
