<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $table =  'pages';

    protected $fillable = ['id', 'slug', 'titulo', 'page_content', 'categoria_id', 'slug_path'];

    protected $hidden = ['created_at', 'updated_at'];

    protected function getSlug($value): string {
        return str_slug($value, '-');
    }

    protected function generateStrings($value): string {
        $strength = 20;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($permitted_chars);
        $random_string = '';
        for ($i=0; $i < $strength; $i++) { 
            # bucle
            $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return "pagina".$value."_".$random_string;
    }
}
