<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatCategoria extends Model
{
    use HasFactory;

    protected $table =  'catalogo_categoria';

    protected $fillable = ['id', 'nombre', 'activo'];

    protected $hidden = ['created_at', 'updated_at'];
}
