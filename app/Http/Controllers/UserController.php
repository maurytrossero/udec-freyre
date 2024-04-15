<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $title= 'Listado de usuarios';
        //dd('llegamos al listado de usuarios desde el conteoller', $users);
       return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        //$roles = $user->Roles()->get();
        $roles = $user->getRoleNames(); // Obtener los nombres de los roles del usuario
        //dd($roles);
        
        return view('users.show')
            ->with('user' , $user)
            ->with('roles', $roles);
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

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();


        return redirect()->route('users.index')
            ->with('info', 'Usuario registrado con éxito');
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        return view('users.edit', ['user' => $user,'roles' => $roles]);
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => '',
            'dni' => 'numeric|min:6',
            'telefono' => 'numeric|min:6',

        ], [
                'name.required' => 'El nombre es obligatorio',
                'email.required' => 'El email es obligatorio',
                'email.email' => 'Debe ingresar un email valido',
                'email.unique' => 'El email ingresado ya está registrado',
                'dni.numeric' => 'El DNI debe contener solo números',
                'telefono.numeric' => 'El telefono debe contener solo números',
                'dni.min' => 'El DNI debe contener como mínimo 6 numeros',
                'telefono.min' => 'El telefono debe contener como mínimo 6 numeros',
        ]);

        if($data['password'] != null)
        {
            $data['password'] = bcrypt($data['password']);
        }
        else
        {
            unset($data['password']);
        }

        $ids= request()->input('select_rol_id');

        if($ids != null)
        {
            foreach ($ids as $id)
            {
                $role = Role::find($id);
                //dd($role->name);
                $user->assignRole($role);
            }

        }

        $user->update($data);

        return redirect()->route('users.show', ['user' => $user])
            ->with('info', 'Usuario actualizado con éxito');
        ;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('info', 'Usuario eliminado con éxito');
    }

    public function editPerfil(User  $user)
    {
        return view('perfil.edit', ['user' => $user]);
    }

    public function updatePerfil(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => '',
            'dni' => 'numeric|min:6',
            'telefono' => 'numeric|min:6',

        ],
            [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'Debe ingresar un email valido',
            'email.unique' => 'El email ingresado ya está registrado',
            'dni.numeric' => 'El DNI debe contener solo números',
            'telefono.numeric' => 'El telefono debe contener solo números',
            'dni.min' => 'El DNI debe contener como mínimo 6 numeros',
            'telefono.min' => 'El telefono debe contener como mínimo 6 numeros',
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

        return redirect()->route('users.perfil-show',['user' => $user])
            ->with('info', 'Datos personales actualizados con éxito');
        ;
    }

    public function showPerfil(User $user)
    {
        //dd($user);

        $roles = $user->Roles()->get();

        return view('perfil.show')
            ->with('user' , $user)
            ->with('roles', $roles);
    }
}
