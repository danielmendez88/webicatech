<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    protected $table =  'instructores';

    protected $fillable = ['id', 'especialidad', 'nombre', 'gradoAcademico'];

    protected $hidden = ['created_at', 'updated_at'];
}
