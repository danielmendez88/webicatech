<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table =  'banner';

    protected $fillable = ['id', 'nombre', 'activo', 'path', 'tipo_archivo', 'slug', 'id_catbanner', 'fecha_termino', 'href', 'youtubeid', 'documento'];

    protected $hidden = ['created_at', 'updated_at'];

    public function catbanner(){
        return $this->hasMany(CatBanner::class);
    }
}
