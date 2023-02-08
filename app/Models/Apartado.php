<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartado extends Model
{
    use HasFactory;

    protected $table =  'apartados';

    protected $fillable = ['id', 'titulo', 'activo', 'descripcion', 'sub_apartado_id'];

    protected $hidden = ['created_at', 'updated_at'];
}
