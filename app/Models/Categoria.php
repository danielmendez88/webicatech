<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // crear variables
    protected $table =  'categoria';

    protected $fillable = ['id', 'categoria', 'descripcion', 'slug', 'imagen'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * método slug
     */
    protected function getSlugAttribute($value): string {
        return str_slug($value, '-');
    }
}
