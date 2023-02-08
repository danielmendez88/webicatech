<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Redirect,Response;
use App\Models\Comunidado;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Traits\bannerTrait;

class ComunicadoController extends Controller
{
    use bannerTrait;
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
                # si la validación falla, volvemos a la página anterior mandando los mensajes de error
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                # code...
                $safecontent = $this->antiScript($request->contenido);
                $saferes = substr($safecontent, 0, 140);
                $saveComunicado = new Comunidado();
                $saveComunicado->titulo = trim($request->titulo);
                $saveComunicado->localizacion = trim($request->localizacion);
                $saveComunicado->contenido = trim($request->contenido);
                $saveComunicado->categorias = trim($request->categoria);
                $saveComunicado->resumen = trim(strip_tags($saferes,'<p><a><br>'));
                $saveComunicado->confirmado = true;
                $saveComunicado->url = str_slug($request->url, '-');
                $saveComunicado->fecha_publicacion = Carbon::now();
                $saveComunicado->save();

                #obtener ultimo id
                $lasIdComunicado = $saveComunicado->id;

                if ($request->hasFile('imagen_comunicado')) {
                    #obtenemos el valor del comunicado
                    $imagen_guardada = DB::table('comunicados')->WHERE('id', $lasIdComunicado)->VALUE('imagen');
                    // checamos que no sea nulo
                    if (!is_null($imagen_guardada)) {
                        # si no está nulo checamos que no esté vacio
                        if (!empty($imagen_guardada)) {
                            # si no está vacio
                            $docImagen = explode("/",$imagen_guardada, 5);
                            if (Storage::exists($docImagen[4])) {
                                # checamos si hay un documento de ser así procedemos a eliminarlo
                                Storage::delete($docImagen[4]);
                            }
                        }
                    }

                    $imagen_comunicado_save = $request->file('imagen_comunicado'); # obtenemos el archivo
                    $url_imagen_comunicado = $this->uploadFile($imagen_comunicado_save, $lasIdComunicado, 'imagen_comunicado'); #invocamos el método
                    // creamos un arreglo
                    $arreglo_comunicado = [
                        'imagen' => $url_imagen_comunicado
                    ];

                    // vamos a actualizar el registro con el arreglo que trae diferentes variables y carga de archivos
                    DB::table('comunicados')->WHERE('id', $lasIdComunicado)->update($arreglo_comunicado);

                    // limpiamos el arreglo
                    unset($arreglo_comunicado);
                } 

                return redirect()->route('comunicado.index')->with('success', 'Comunicado Agregado éxitosamente.');
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
        $bprincipal = $this->getBanner('banner_principal');
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        //el comunicado exacto
        $iddecode = base64_decode($id);
        
        $detatelle = Comunidado::SELECT('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'id')
                    ->WHERE('id', '=', $iddecode)
                    ->get();
        if ($detatelle == null) {
            # retornamos el error 404
            return view('errors.404');
        }
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
        $identificador = $detatelle[0]->id;
        return view('pages.noticias_detalles', compact('titulo', 'imagen', 'fecha_pub', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'identificador', 'bprincipal'))
            ->withArticle($detatelle);
    }

    public function showdetails($id)
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        //el comunicado exacto
        $iddecode = base64_decode($id);
        //dd($iddecode);
        //$detatelle = new Comunidado();
        $detatelle = Comunidado::SELECT('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'id')
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
        $identificador = $detatelle[0]->id;
        return view('pages.comunicados_detalle', compact('titulo', 'imagen', 'fecha_pub', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'identificador'))
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
        // edicion
        $iddecode = base64_decode($id);
        $detalles = DB::table('comunicados')
                    ->select('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'id')
                    ->where('id', $iddecode)->first();

        return view('pages.formulario_comunicado_editar', compact('detalles'));
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
        //ACTUALIZAR REGISTROS
        if (isset($id)) {
            $ids = base64_decode($id);
            # funcion antiscript
            $safecontent = $this->antiScript($request->contenido);
            $saferes = substr($safecontent, 0, 140);
            # code...
            $array_update = [
                'titulo' => trim($request->titulo),
                'localizacion' => trim($request->localizacion),
                'contenido' => trim($request->contenido),
                'categorias' => trim($request->categoria),
                'resumen' => trim(strip_tags($saferes,'<p><a><br>')),
                'url' => str_slug($request->url, '-'),
            ];

            DB::table('comunicados')->WHERE('id', $ids)->UPDATE($array_update);

            if ($request->hasFile('imagen_comunicado')) {
                #obtenemos el valor del comunicado
                $imagen_guardada = DB::table('comunicados')->WHERE('id', $ids)->VALUE('imagen');
                // checamos que no sea nulo
                if (!is_null($imagen_guardada)) {
                    # si no está nulo checamos que no esté vacio
                    if (!empty($imagen_guardada)) {
                        # si no está vacio
                        $docImagen = explode("/",$imagen_guardada, 5);
                        if (Storage::exists($docImagen[4])) {
                            # checamos si hay un documento de ser así procedemos a eliminarlo
                            Storage::delete($docImagen[4]);
                        }
                    }
                }

                $imagen_comunicado_save = $request->file('imagen_comunicado'); # obtenemos el archivo
                $url_imagen_comunicado = $this->uploadFile($imagen_comunicado_save, $ids, 'imagen_comunicado'); #invocamos el método
                // creamos un arreglo
                $arreglo_comunicado = [
                    'imagen' => $url_imagen_comunicado
                ];

                // vamos a actualizar el registro con el arreglo que trae diferentes variables y carga de archivos
                DB::table('comunicados')->WHERE('id', $ids)->update($arreglo_comunicado);

                // limpiamos el arreglo
                unset($arreglo_comunicado);
            }

            return redirect()->route('comunicado.index')
                ->with('success', sprintf('COMUNICADO %s  MODIFICADO EXTIOSAMENTE!', $request->titulo));
        }
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
        $bprincipal = $this->getBanner('banner_principal');
        $comunicados = new Comunidado();
        $newsAll = $comunicados::WHERE('confirmado', true)->latest()->paginate(7);
        return view('pages.comunicado', compact('bprincipal', 'newsAll'));
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

    /**
     * creamos un método que nos ayude a cargar un archivo al servidor de una manera fácil
     */
    protected function uploadFile($file, $id, $name)
    {
        $tamanio = $file->getSize(); #obtener el tamaño del archivo del cliente
        //$tamanio = $file->getClientSize(); #obtener el tamaño del archivo del cliente
        $extensionFile = $file->getClientOriginalExtension(); // extension de la imagen
        # nuevo nombre del archivo
        $documentFile = trim($name."_".date('YmdHis')."_".$id.".".$extensionFile);
        $file->storeAs('/uploadFiles/comunicados/'.$id, $documentFile); // guardamos el archivo en la carpeta storage
        $documentUrl = Storage::url('/uploadFiles/comunicados/'.$id."/".$documentFile); // obtenemos la url donde se encuentra el archivo almacenado en el servidor.
        return $documentUrl;
    }
}
