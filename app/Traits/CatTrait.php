<?php
namespace App\Traits;
use App\Models\Pages;

trait CatTrait {
    public function allCategories() {
        // Fetch all the students from the 'student' table.
        $categoriaAll = Pages::select('pages.slug', 'pages.titulo', 'pages.page_content', 'catalogo_categoria.id', 'pages.slug_path')
        ->join('catalogo_categoria', 'pages.categoria_id', '=', 'catalogo_categoria.id')
        ->where('catalogo_categoria.activo', 1)
        ->get();

        return $categoriaAll;
    }
}