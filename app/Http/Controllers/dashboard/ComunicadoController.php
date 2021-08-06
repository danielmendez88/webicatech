<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * imports
 */
use App\Traits\CatTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Redirect,Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Comunidado;

class ComunicadoController extends Controller
{
    use CatTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allcategories = $this->allCategories();
        /**
         * comunicado
         */
        $comunidado = new Comunidado();
        $comunicados = $comunidado::WHERE('confirmado', true)->latest()->paginate(6);
        return view('theme.dashboard.contenido.main_comunicado_index', compact('allcategories', 'comunicados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allcategories = $this->allCategories();
        return view('theme.dashboard.forms.formcomunicado', compact('allcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

                return redirect()->route('comunicado_indice')->with('success', 'Comunicado Agregado éxitosamente.');
            }
        } catch (Exception $e) {
            //manda una excepcion sql
            return back()->with('error', $e->getMessage());
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
        $idComunicado = base64_decode($id);
        //
        $allcategories = $this->allCategories();
        /**
         * 
         */
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $detatelle = Comunidado::SELECT('titulo', 'imagen', 'fecha_publicacion', 'localizacion', 'contenido', 'categorias', 'url', 'resumen', 'id')
                    ->WHERE('id', '=', $idComunicado)
                    ->first();
        $titulo = $detatelle->titulo;
        $imagen = $detatelle->imagen;
        $fecha = \Carbon\Carbon::parse($detatelle->fecha_publicacion);
        $mes = $meses[($fecha->format('n')) - 1];
        $fecha_pub = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
        $localizacion = $detatelle->localizacion;
        $contenido = $detatelle->contenido;
        $categorias = $detatelle->categorias;
        $url = $detatelle->url;
        $resumen = $detatelle->resumen;
        $identificador = $detatelle->id;
        $fechaPub = $detatelle->fecha_publicacion;

        return view('theme.dashboard.contenido.detalle_comunicado', compact('allcategories', 'titulo', 'imagen', 'fechaPub', 'contenido', 'url'));
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
