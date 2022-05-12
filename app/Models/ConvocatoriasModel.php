<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvocatoriasModel extends Model
{
    use HasFactory;
    // crear tabla
    protected $table =  'convocatoria';

    protected $fillable = ['id', 'titulo', 'perfil', 'imagen', 'requisitos'];

    protected $hidden = ['created_at', 'updated_at'];
}
