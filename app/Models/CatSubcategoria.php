<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatSubcategoria extends Model
{
    use HasFactory;

    protected $table =  'catalogo_subcategoria';

    protected $fillable = ['id', 'nombre', 'activo', 'cat_categoria_id', 'ruta_archivo', 'fecha_modificacion', 'titulo_documento'];

    protected $hidden = ['created_at', 'updated_at'];
}
