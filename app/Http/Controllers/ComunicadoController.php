<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Redirect,Response;
use App\Models\Comunidado;
use Carbon\Carbon;

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
        $new_all = $comunidado::WHERE('confirmado', true)->latest()->limit(5)->get();
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
        try {
            //code...
            $validator = Validator::make($request->all(), [
                'titulo' => 'required',
                'imagen_comunicado' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'localizacion' => 'required',
                'contenido' => 'required',
                'categoria' => 'required',
                'url' => 'required'
            ]);
            if ($validator->fails()) {
                # code...
                return Redirect::to("/error-cargar-comunicado");
            } else {
                # code...
                $safecontent = $this->antiScript($request->contenido);
                $saferes = substr($safecontent, 0, 140);
                $saveComunicado = new Comunidado();
                if ($request->hasFile('imagen_comunicado')) {
                    # si se encuentra la imagen comenzamos a subirlo...
                    $file = $request->file('imagen_comunicado'); # obtenemos el archivo
                    $tamanio = $file->getClientSize(); #obtener el tamaño del archivo del cliente
                    $extensionImagen = $file->getClientOriginalExtension(); // extension de la imagen
                    $imagenFile = trim(str_slug($request->url, '-')) . "." . $extensionImagen; // nombre de la imagen al momento de subirla
                    $request->file('imagen_comunicado')->storeAs('/uploadFiles/', $imagenFile); // guardamos el archivo en la carpeta storage
                    $imagenUrl = Storage::url('/uploadFiles/'.$imagenFile); // obtenemos la url donde se encuentra el archivo almacenado en el servidor.
                } else {
                    return Redirect::to("/error-cargar-comunicado");
                }


                $saveComunicado->titulo = trim($request->titulo);
                $saveComunicado->imagen = trim($imagenUrl);
                $saveComunicado->localizacion = trim($request->localizacion);
                $saveComunicado->contenido = trim(strip_tags($safecontent,'<p><a><br>'));
                $saveComunicado->categorias = trim($request->categoria);
                $saveComunicado->resumen = trim(strip_tags($saferes,'<p><a><br>'));
                $saveComunicado->confirmado = true;
                $saveComunicado->url = str_slug($request->url, '-');
                $saveComunicado->fecha_publicacion = Carbon::now();
                $saveComunicado->save();

                return Redirect::to("/administrador/registro-personal")->withSuccess('Personal Agregado éxitosamente.');
            }
        } catch (Exception $e) {
            //throw $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        //el comunicado exacto
        $iddecode = base64_decode($id);
        //dd($iddecode);
        //$detatelle = new Comunidado();
        $detatelle = Comunidado::SELECT('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen')
                    ->WHERE('id', '=', $iddecode)
                    ->get();
        $titulo = $detatelle[0]->titulo;
        $imagen = $detatelle[0]->imagen;
        $fecha = \Carbon\Carbon::parse($detatelle[0]->fecha_publicacion);
        $mes = $meses[($fecha->format('n')) - 1];
        $fecha_pub = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
        $localizacion = $detatelle[0]->localizacion;
        $contenido = $detatelle[0]->contenido;
        $categorias = $detatelle[0]->categorias;
        $url = $detatelle[0]->url;
        $resumen = $detatelle[0]->resumen;
        return view('pages.noticias_detalles', compact('titulo', 'imagen', 'fecha_pub', 'localizacion', 'contenido', 'categorias', 'url', 'resumen'))
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

    /*
     * Método para mostrar el formulario de captura
     */
    public function getform(){
        return view('pages.formulario_comunicado');
    }
    /**
     *
     *
     *
     */
    public function getnews() {
        $comunicados = new Comunidado();
        $newsAll = $comunicados::WHERE('confirmado', true)->latest()->paginate(7);
        $newsAll->withPath('comunicado/url');
        return view('pages.news', compact('newsAll'));
    }

    protected function antiScript($contenido)
    {
        $pattern = '/script.*?\/script/ius';
        $safecontenido = preg_replace($pattern, '', $contenido) ? preg_replace('/script.*?\/script/ius', '', $contenido) : $contenido; // elimina cualquier tipo de ataque con script
        if (strcmp($contenido, $safecontenido) !== 0)
        {
            $safecontenido = NULL;
        }

        return $safecontenido;
    }
}
