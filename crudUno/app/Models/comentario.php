<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $fillable = [
        'id_comentario',
        'descripcion',
        'id_publicacion',
        'id_usuario'
        
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function publicacionUno()
    {
        return $this->belongsTo(publicacion::class);
    }
}
