<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidado;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // este metodo nos dará acceso a todos los datos convenientes
        $comunidado = new Comunidado();
        $new_all = $comunidado::WHERE('confirmado', true)->get();
        // return view('', compact);
        return view('index', compact('new_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // agregamos el registro de validación
        $request->validate([
            'titulo' => 'required',
            'imagen' => 'required',
            'fecha_publicacion' => 'required',
            'localizacion' => 'required',
            'contenido' => 'required',
            'categorias' => 'required',
            'url ' => 'required',
            'resumen' => 'required',
        ]);

        $saveComunicado = new Comunidado();
        $saveComunicado->titulo = $request->titulo;
        $saveComunicado->imagen = $request->imagen;
        $saveComunicado->fecha_publicacion = $request->fecha_publicacion;
        $saveComunicado->localizacion = $request->localizacion;
        $saveComunicado->contenido = $request->contenido;
        $saveComunicado->categorias = $request->categorias;
        $saveComunicado->url = $saveComunicado->getSlugAttribute($request->titulo);
        $saveComunicado->resumen = $request->resumen;
        // guardamos el contenido en la base de datos
        $saveComunicado->save();
        return response()->json('Comunicado agregado éxitosamente', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //el comunicado exacto
        $iddecode = base64_decode($id);
        //dd($iddecode);
        //$detatelle = new Comunidado();
        $detatelle = Comunidado::SELECT('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen')
                    ->WHERE('id', '=', $iddecode)
                    ->get();
        $titulo = $detatelle[0]->titulo;
        $imagen = $detatelle[0]->imagen;
        $fecha_publicacion = $detatelle[0]->fecha_publicacion;
        $localizacion = $detatelle[0]->localizacion;
        $contenido = $detatelle[0]->contenido;
        $categorias = $detatelle[0]->categorias;
        $url = $detatelle[0]->url;
        $resumen = $detatelle[0]->resumen;
        return view('pages.noticias_detalles', compact('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen'))
            ->withArticle($detatelle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
