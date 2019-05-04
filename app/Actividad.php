<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{

    protected $table = 'actividades';

    protected $fillable = ['nombre','descripcion','fecha_inicio','fecha_finalizacion','costo_mensual',
        'dia_cursado','horario','estado_inscripcion'];

    protected $guarded = ['id', 'created_at', 'updated_at'];


    //GETTERS Y SETTERS
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function setFechaInicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function getFechaFinalizacion() {
        return $this->fecha_finalizacion;
    }

    public function setFechaFinalizacion($fecha_finalizacion) {
        $this->fecha_finalizacion = $fecha_finalizacion;
    }

    public function getCostoMensual() {
        return $this->costo_mensual;
    }

    public function setCostoMensual($costo_mensual) {
        $this->costo_mensual = $costo_mensual;
    }

    public function getDiaCursado() {
        return $this->dia_cursado;
    }

    public function setDiaCursado($dia_cursado) {
        $this->dia_cursado = $dia_cursado;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function getEstadoInscripcion() {
        return $this->estado_inscripcion;
    }

    public function setEstadoInscripcion($estado_inscripcion) {
        $this->estado_inscripcion = $estado_inscripcion;
    }

    //RELACIÓN BASE DE DATOS


    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
