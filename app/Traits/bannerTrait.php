<?php
namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Banner;

trait bannerTrait {
    protected function getBanner($codigo) {
       /**
        * 
        */
        switch ($codigo) {
            case 'revista':
                # code...
                $query = Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where([['banner.activo','=', true],['catalogo_banner.codigo','=', $codigo]])
                ->take(3)
                ->get();
                break;
            case 'videoteca':
                # consulta para videoteca
                $query = Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href', 'banner.youtubeid')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where([['banner.activo','=', true],['catalogo_banner.codigo','=', $codigo]])
                ->take(6)
                ->get();
                break;
            case 'banner_secundario':
                # consulta para banner secundario
                $query =  Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where([['banner.activo','=', true],['catalogo_banner.codigo','=', $codigo]])
                ->get();
                break;
            default:
                # query por defecto
                $query =  Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where([['banner.activo','=', true],['catalogo_banner.codigo','=', $codigo]])
                ->get();
                break;
        }
        return $query;
    }
}