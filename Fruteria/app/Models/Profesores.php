<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
use HasFactory;
protected $table = 'PROFESORES';
protected $primaryKey = 'dni';
public function asignaturas(){
return $this->belongsToMany(Asignaturas::class, 'IMPARTE','dni','asignatura');
}
}
