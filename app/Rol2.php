<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol2 extends Model
{

    protected $table = 'roles2';

    protected $fillable = ['nombre_rol'];

    protected $guarded = ['id', 'created_at', 'updated_at'];


    //GETTERS Y SETTERS
    public function getId() {
        return $this->id;
    }

    public function getNombreRol() {
        return $this->nombre_rol;
    }

    public function setNombre($nombre_rol) {
        $this->nombre_rol = $nombre_rol;
    }

    public function users()
    {
        return $this->belongsToMany('\App\User');
    }

}
