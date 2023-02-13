<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSecundarioVinculado extends Model
{
    use HasFactory;
    protected $table =  'banner_secundario_vinculado';

    protected $fillable = ['id', 'nombre', 'path', 'id_banner', 'activado'];

    protected $hidden = ['created_at', 'updated_at'];
}
