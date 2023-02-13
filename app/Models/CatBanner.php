<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatBanner extends Model
{
    use HasFactory;

    protected $table =  'catalogo_banner';

    protected $fillable = ['id', 'nombre_ubicacion', 'activo', 'codigo'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * obtener el banner que pertenece a este catalogo
     */
    public function banner(){
        return $this->belongsTo(Banner::class, 'id_catbanner');
    }
}
