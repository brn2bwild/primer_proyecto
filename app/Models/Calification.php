<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calification extends Model
{
    use HasFactory;

    public function alumno(){
      return $this->belongsTo(Alumno::class, 'id_alumno');
    }
}
