<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}
