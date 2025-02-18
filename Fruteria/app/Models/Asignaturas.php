<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model
{
    use HasFactory;
    protected $table = 'ASIGNATURAS';
    protected $primaryKey = 'codigo';
    
    public function profesores(){
        return $this->belongsToMany(Profesores::class, 'imparte','dni','asignatura');
    }
}