<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncamos los datos que pueda contener la base de datos
        DB::table('catalogo_banner')->truncate();

        // armamos el arreglo

        $array_ = [
            [
                'nombre_ubicacion' => 'Banner Principal',
                'codigo' => 'banner_principal',
            ],
            [
                'nombre_ubicacion' => 'Banner Secundario',
                'codigo' => 'banner_secundario',
            ],
            [
                'nombre_ubicacion' => 'Revista',
                'codigo' => 'revista',
            ],
            [
                'nombre_ubicacion' => 'Videoteca',
                'codigo' => 'videoteca',
            ],
            [
                'nombre_ubicacion' => 'Transparencia',
                'codigo' => 'transparencia',
            ]
        ];

        // hacemos una insercion
        DB::table('catalogo_banner')->insert($array_);
    }
}
