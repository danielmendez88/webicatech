<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // crear variables
    protected $table =  'cursos';

    protected $fillable = ['id', 'especialidad', 'curso', 'objetivo', 'perfilIngreso'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * método slug
     */
    protected function getSlugAttribute($value): string {
        return str_slug($value, '-');
    }
}
