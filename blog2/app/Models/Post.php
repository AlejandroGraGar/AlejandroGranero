<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'Titulo',
        'Contenido',
        'usuario_id',
    ];


    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usuario_id');
        }
        

}
