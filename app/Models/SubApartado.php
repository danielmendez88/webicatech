<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubApartado extends Model
{
    use HasFactory;

    protected $table =  'sub_apartado';

    protected $fillable = ['id', 'nombre', 'activo', 'descripcion', 'cat_id'];

    protected $hidden = ['created_at', 'updated_at'];
}
