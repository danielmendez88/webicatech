<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comunidado extends Model
{
    // crear variables
    protected $table =  'comunicados';

    protected $fillable = ['id', 'titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'confirmado'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * método slug
     */
    protected function getSlugAttribute($value): string {
        return str_slug($value, '-');
    }
}
