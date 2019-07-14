<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

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
            'description' => 'required',
        ],
            [
                'name.required' => 'El nombre es obligatorio',
                'description.required' => 'La descripción es requerida',
            ]);

        $role = new Role();
        $role->name = $data['name'];
        $role->slug = strtolower($data['name']);
        $role->description = $data['description'];

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
                'name' => 'required',
                'description' => 'required',
            ],
                [
                    'name.required' => 'El nombre es obligatorio',
                    'description.required' => 'La descripción es requerida',
                ]);

        $role->name = $data['name'];
        $role->slug = strtolower($data['name']);
        $role->description = $data['description'];


        $permiso_especial = request()->get('select_special_permission_id');

        if($permiso_especial != 'null')
        {
            //dd($permiso_especial);

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
