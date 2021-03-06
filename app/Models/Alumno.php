<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'matricula'
    ];

    public function calificaciones(){
      return $this->hasMany(Calification::class,'id_alumno');
    }
}
