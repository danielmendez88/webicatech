<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\uploadImageTrait;

/**
 * imports
 */
use App\Traits\CatTrait;
use App\Models\CatBanner;
use App\Models\Banner;
use Illuminate\Database\QueryException;
use Response;
use App\Traits\uploadFileTrait;
use Illuminate\Support\Facades\DB;
use App\Traits\DeleteTrait;
use App\Models\BannerSecundarioVinculado;

class BannerSectionController extends Controller
{
    use CatTrait, uploadImageTrait, uploadFileTrait, DeleteTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategories = $this->allCategories();
        // redirigir al administrador principal
        // inicializar el módelo
        $catalogoBanner = new CatBanner;
        $catBanner = $catalogoBanner->select('id','nombre_ubicacion')->where('activo', true)->get();
        return view('theme.dashboard.forms.formadminbanner', compact('allcategories', 'catBanner'));
    }

    public function main_banner(){
        $allcategories = $this->allCategories();
        /**
         * catalogo de banner
         */
        $catalogoBanner = new CatBanner;
        $catBanner = $catalogoBanner->select('id','nombre_ubicacion')->where('activo', true)->get();
        /**
         * redireccionar a vista
         */
        return view('theme.dashboard.contenido.main_banner_index', compact('allcategories', 'catBanner'));
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
        // dd($request->all());
        // se procede a guardar el banner en la base de datos url
        // utilizamos una funcion try catch
        /**
        * validacion de los campos
        */

        $validatedData = $request->validate([
            'titulo' => 'required',
            'catbanner' => 'required',
        ], [
            'titulo.required' => 'El título es requerido',
            'catbanner.required' => 'El banner es requerido',
        ]);

        $titulo = $_POST['titulo']; // SI

        try {
            //si se entra al método se tiene que ingresar el registro

            if (!empty($titulo)) {
                # si hay título se prosigue
                $fecha = $_POST['fecha_termino'];
                $activo = $_POST['activo'];
                $cat_banner = $_POST['catbanner'];

                if (!empty($fecha)) {
                    # si la fecha no es vacia se procede a tratarla para modificarla
                    $dateFormated = explode('/', $fecha);
                    $date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
                } else {
                    # si la fecha está vacia tenemos a enviarla en null
                    $date = '';
                }
                $habilitado = (empty($activo) ? false : true);
                // se trabaja insertando el dato en la base de datos y subiendo el archivo al servidor
                $tituloimagen = str_replace(" ", "_", $this->eliminar_acentos($titulo));
                /**
                 * comprobar el banner
                 */
                switch ($cat_banner) {
                    case 2:
                        # banner secundario
                        $urlref = $_POST['url_pagina'];
                        $pivote = false;
                    break;
                    case 3:
                        # checamos el banner revista
                        /**
                        * obtener valores de una consulta de tipo de banner
                        */
                        $urlref = $_POST['url_pagina'];
                        $pivote = true;
                    break;
                    case 4:
                        # checamos el banner videoteca
                        $urlref = $_POST['url_pagina'];
                        parse_str(parse_url($urlref, PHP_URL_QUERY), $my_array_of_vars);
                        $pivote = false;
                    break;
                    default:
                        # code...
                        $urlref = '';
                        $pivote = false;
                    break;
                }

                $bannerCreate = new Banner;
                $bannerCreate->nombre = $titulo;
                $bannerCreate->slug = strtolower($tituloimagen);
                $bannerCreate->activo = $habilitado;
                $bannerCreate->fecha_termino = $date;
                $bannerCreate->id_catbanner = $cat_banner;
                $bannerCreate->href = $urlref;
                $bannerCreate->youtubeid = (isset($my_array_of_vars['v']) ? $my_array_of_vars['v'] : '');
                $bannerCreate->save();
                // #obtener el último id insertado
                $lastId = $bannerCreate->id;
                /**
                 * checamos el pivote
                 */
                if ($pivote == true) {
                    # si la variable es verdadero subimos el archivo
                    if ($request->hasFile('archivo_revista')) {
                        # obtenemos el valor del comunicado
                        $documento_revista = Banner::where('id', $lastId)->value('documento');
                        // checamos que no sea nulo
                        if (!is_null($documento_revista)) {
                            # si no está nulo checamos que no esté vacio
                            if (!empty($documento_revista)) {
                                # si no está vacio
                                $docRevista = explode("/",$documento_revista, 5);
                                 if (Storage::exists($docRevista[4])) {
                                     # checamos si hay un documento de ser así procedemos a eliminarlo
                                     Storage::delete($docRevista[4]);
                                 }
                            }
                        }
         
                        $remplazartitulodocumento = strtolower($tituloimagen);
         
                        $archivo_revista = $request->file('archivo_revista'); # obtenemos el archivo
                        $url_archivo = $this->uploadFile($archivo_revista, $lastId, $remplazartitulodocumento , 'documento_revista'); #invocamos el método
                        // creamos un arreglo
                        $array_documento = [
                            'documento' => $url_archivo
                        ];
         
                        // vamos a actualizar el registro con el arreglo que trae diferentes variables y carga de archivos
                        Banner::WHERE('id', $lastId)->update($array_documento);
         
                        // limpiamos el arreglo
                        unset($array_documento);
                        
                    }
                }

                /**
                * redireccionamos
                */
                return redirect()->route('main_form_banner')->with('success', 'Banner Agregado Éxitosamente!');

            } else {
                # si no hay titulo se manda un mensaje de error
                return back()->with('error', 'No hay título para este banner');
            }
        } catch (QueryException $th) {
            //manda una excepcion sql
            return back()->with('error', $th->getMessage());
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
        //
        $allcategories = $this->allCategories();
        $idCategoria = base64_decode($id);
        /**
         * consulta - query
         */
        $banner_by_id = Banner::select('banner.path', 'banner.nombre', 'banner.tipo_archivo', 'banner.documento', 'banner.id', 'banner.youtubeid', 'catalogo_banner.codigo', 'catalogo_banner.nombre_ubicacion')->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                        ->where('banner.id_catbanner', $idCategoria)->get();
        return view('theme.dashboard.contenido.banner', compact('banner_by_id', 'allcategories', 'idCategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idBan)
    {
        $allcategories = $this->allCategories();
        // obtenemos el id
        $idBanner = base64_decode($id);
        $idCat = base64_decode($idBan);
        /**
         * generamos una consulta que nos traiga uno registro
         */
        $getBanner_ = Banner::select('catalogo_banner.codigo', 'banner.path', 'banner.nombre')->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                      ->where('banner.id', $idBanner)->first();
        return view('theme.dashboard.forms.bannereditform', compact('idBanner', 'allcategories', 'getBanner_', 'idCat'));
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
    }

    public function storefromajax(Request $request){
        if (isset($_POST['image'])) {
            # si hay una petición se procede a ingresar en la parte del código que nos permitirá guardar el registro
            $idban = base64_decode($request->get('idBanner'));
            /**
             * decodificamos la imagen a procesar
             */
            $imagen = $_POST['image'];
            $image = str_replace('data:image/png;base64,', '', $imagen);
            $image = str_replace(' ', '+', $image);
            $extension = explode('/', mime_content_type($imagen))[1];
            $image_decode = base64_decode($image);
            /**
             * obtener el código
             */
            $bannerById = DB::table('banner')
                ->select('catalogo_banner.codigo', 'banner.slug')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where('banner.id', $idban)
                ->first();
            /**
             * guardar la imagen y retornar la url dónde se guarda
             */
            $url_imagen = $this->uploadImage($image_decode, $idban, $bannerById->slug, $extension, $bannerById->codigo);
            /**
             * actualizar el registro -  creamos un arreglo
             */
            $array_img = [
                'path' => $url_imagen,
                'tipo_archivo' => $extension
            ];
            // actualizamos registro
            Banner::findOrfail($idban)->update($array_img);
            // limpiamos el arreglo
            unset($array_img);
            // enviado respuesta positiva
            $positive_response = 'OK';
            return Response::json($positive_response);

        } else {
            # mensaje de error - no hay banner
            return Response::json('Error');
        }
        // return Response::json($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $categoria)
    {
        try {
            switch ($categoria) {
                case '4':
                        # sólo se tiene que borrar si en dado caso la categoria está en este numero
                        //intentos para cargar los datos (borrar registros y archivos)
                        $delete_banner = Banner::findOrFail($id);
                        if (!is_null($delete_banner)) {
                            # borramos el registro
                            $delete_banner->delete();
                            return redirect()->route('select_category',  ['id' => base64_encode($categoria)])->with('success', 'Elemento Eliminado!');
                        }
                    break;
                
                default:
                        //intentos para cargar los datos (borrar registros y archivos)
                        //obtener path
                        $banner_seleccionado = Banner::select('path')->where('id', $id)->first();
                        $eliminar = $this->deleteFile($id, $banner_seleccionado->path);
                        $delete_banner = Banner::findOrFail($id);
                        if (!is_null($delete_banner)) {
                            # borramos el registro
                            $delete_banner->delete();
                            return redirect()->route('select_category',  ['id' => base64_encode($categoria)])->with('success', 'Elemento Eliminado!');
                        }
                    break;
            }
            
        } catch (QueryException $th) {
            //excepcion enviar mensaje
            return back()->with('error', $th->getMessage());
        }
    }
    /**
     * eliminar caracteres especiales
     */
    private function eliminar_acentos($cadena){
		
		//Reemplazamos la A y a
		$cadena = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$cadena
		);

		//Reemplazamos la E y e
		$cadena = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$cadena );

		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$cadena );

		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$cadena );

		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$cadena );

		//Reemplazamos la N, n, C y c
		$cadena = str_replace(
		array('Ñ', 'ñ', 'Ç', 'ç'),
		array('N', 'n', 'C', 'c'),
		$cadena
		);
		
		return $cadena;
	}

    protected function linked_banner($id, $idcat)
    {
        $allcategories = $this->allCategories();
        $idBanner = base64_decode($id);
        $idCategoria = base64_decode($idcat);
        return view('theme.dashboard.forms.linked_banner', compact('idBanner', 'idCategoria', 'allcategories'));
    }

    protected function secondary_banner_linked(Request $request)
    {
        // validar
        $validatedData = $request->validate([
            'linked_file' => 'required|max:2048|mimes:jpg,png,jpeg,jpe,pdf',
        ], [
            'linked_file.required' => 'EL ARCHIVO ES REQUERIDO',
            'linked_file.mimes' => 'NO SE ACEPTA ESTE TIPO DE ARCHIVO, SÓLO jpg, png, jpeg, jpe, pdf',
            'linked_file.max' => 'EL TAMAÑO MÁXIMO DE UN ARCHIVO A CARGAR ES DE 2MB (2048 KB)'
        ]);
        /**
         * obtenemos un registro y hacemos un try
         */
        try {
            //se inicia el código para guardar el registro 'file' => 'required|max:10000|mimes:doc,docx
            $activo = $_POST['activo'];
            $habilitado = (empty($activo) ? false : true);
            $idLinkedBanner = base64_decode($request->get('idBanner'));
            $id_categoria = $request->get('idCategoria');
            /**
             * si hay un archivo procedemos a subirlo
             */
            if ($request->hasFile('linked_file')) {
                $archivo_banner_enlazado = $request->file('linked_file'); # obtenemos el archivo
                $imagen = $request->file('linked_file');

                $extension = $imagen->extension();
                /**
                 * banner slug
                 */
                $bannerById = DB::table('banner')
                ->select('catalogo_banner.codigo', 'banner.slug')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where('banner.id', $idLinkedBanner)
                ->first();
                // url si la extensión es pdf
                if ($extension == 'pdf') {
                    # se llama a otro uploadfile
                    $url_archivo = $this->uploadFile($archivo_banner_enlazado, $idLinkedBanner, $bannerById->slug.'_'.'secondary_banner', 'banner_secundario_vinculado');
                } else {
                    $url_archivo = $this->uploadImage($archivo_banner_enlazado, $idLinkedBanner, $bannerById->slug.'_'.'secondary_banner', $extension, 'banner_secundario_vinculado'); #invocamos el método
                }
                
                // creamos un arreglo
                $array_documento = [
                    'linked_file' => $url_archivo
                ];
                // limpiamos el arreglo
                unset($array_documento);
                /**
                 * guardar registro
                 */
                $banner_secundario_vinculado = new BannerSecundarioVinculado;
                $banner_secundario_vinculado->nombre = $bannerById->slug.'_'.'secondary_banner';
                $banner_secundario_vinculado->path = $url_archivo;
                $banner_secundario_vinculado->id_banner = $idLinkedBanner;
                $banner_secundario_vinculado->activado = $habilitado;
                $banner_secundario_vinculado->save();
            }
            /**
            * redireccionamiento
            */

            return redirect()->route('select_category', $id_categoria)->with('success', 'Banner Secundario Vinculado Éxitosamente!');
        } catch (QueryException $th) {
            //throw QueryException;
            return back()->with('error', $th->getMessage());
        }
    }
}
