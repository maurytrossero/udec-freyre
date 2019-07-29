<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoDeEncuentro extends Model
{
    protected $table = 'puntos_de_encuentros';

    protected $fillable = ['nombre','descripcion','fecha_realización','imagen','lugar'];

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

    public function getFechaRealizacion() {
        return $this->fecha_realización;
    }

    public function setFechaRealizacion($fecha_realización) {
        $this->fecha_realización = $fecha_realización;
    }

    public function getLugar() {
        return $this->lugar;
    }

    public function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

}
