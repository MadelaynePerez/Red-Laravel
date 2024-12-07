<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    //
    protected $fillable = [
        'id_publicacion',
        'fecha_publicacion',
        'descripcion',
        'titulo',
        'id_usuario'
        
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
