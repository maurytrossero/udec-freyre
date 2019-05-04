<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'actividades';

    protected $fillable = ['fecha_inscripcion','user_id','actividades_id'];

    protected $guarded = ['id', 'created_at', 'updated_at'];


    //GETTERS Y SETTERS
    public function getId() {
        return $this->id;
    }

    public function getFecha_inscripcion() {
        return $this->fecha_inscripcion;
    }

    public function setFecha_inscripcion($fecha_inscripcion) {
        $this->fecha_inscripcion = $fecha_inscripcion;
    }


    //Relacion con otras BD
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class,'actividades_id');
    }
}
