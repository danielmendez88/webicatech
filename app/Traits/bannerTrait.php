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
                ->orderBy('banner.id', 'desc')
                ->take(2)
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
                $query =  Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href',
                'banner_secundario_vinculado.nombre AS banner_vinculado_nombre', 'banner_secundario_vinculado.path AS path_vinculado', 'banner_secundario_vinculado.activado')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->leftJoin('banner_secundario_vinculado', 'banner.id', '=', 'banner_secundario_vinculado.id_banner')
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
