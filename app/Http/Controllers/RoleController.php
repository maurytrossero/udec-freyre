<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        $title= 'Listado de roles';

        return view('roles.index', compact('title', 'roles'));
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);

        $permisos=$role->permissions()->get();

        return view('roles.show')
            ->with('role' , $role)
            ->with('permisos',$permisos);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
        ],
            [
                'name.required' => 'El nombre es obligatorio'
            ]);

        $role = new Role();
        $role->name = $data['name'];

        $role->save();
        return redirect()->route('roles.index')
            ->with('info', 'Rol registrado con éxito');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', ['role' => $role,'permissions' => $permissions]);
    }

    public function update(Role $role)
    {
        $data = request()->validate([
                'name' => 'required'

            ],
                [
                    'name.required' => 'El nombre es obligatorio'
                ]);

        $role->name = $data['name'];

        $permiso_especial = request()->get('select_special_permission_id');

        if($permiso_especial != 'null')
        {
            $role->special = $permiso_especial;
        }

        $role->update($data);


        $permisos = request()->get('select_permissions_id');

        if($permisos != null)
        {
            $role->permissions()->sync(request()->get('select_permissions_id'));
        }

        return redirect()->route('roles.show', ['role' => $role])
            ->with('info', 'Rol actualizado con éxito');
        ;
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')
            ->with('info', 'Rol eliminado con éxito');
    }
}
