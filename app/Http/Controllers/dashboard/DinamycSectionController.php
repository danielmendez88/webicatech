<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
/**
 * imports
 */
use App\Traits\CatTrait;
use App\Models\Apartado;
use App\Traits\uploadFileTrait;
use App\Models\CatSubcategoria;

class DinamycSectionController extends Controller
{
    use CatTrait, uploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $slg_path, $id)
    {
        $allcategories = $this->allCategories();
        $apartados = Apartado::select('apartados.titulo', 'apartados.id', 'apartados.activo', 'apartados.descripcion', 'catalogo_categoria.id AS catId', 'pages.slug_path', 'pages.page_content')
                    ->join('catalogo_categoria', 'apartados.cat_id', '=', 'catalogo_categoria.id')
                    ->join('pages', 'apartados.cat_id', '=', 'pages.categoria_id')
                    ->where(['apartados.activo' => 1, 'catalogo_categoria.id' => $id])
                    ->get();
        // modificaciones
        return view('theme.dashboard.forms.dinamycsection', compact('allcategories', 'slug', 'id', 'apartados', 'slg_path'));
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
        //
        try {
            $habilitado = (empty($request->get('habilitado')) ? false : true);
            $apartado_guardar = new Apartado;
            $apartado_guardar->titulo = $request->get('categoria');
            $apartado_guardar->descripcion = $request->get('descripcion');
            $apartado_guardar->activo = $habilitado;
            $apartado_guardar->cat_id = $request->get('idcategoria');
            $apartado_guardar->save();
            return redirect()->route('dinamic_dashboard_form', [$request->slug, $request->path_slug, $request->idcategoria])->with('success','Apartado Agregado exitosamente!');
            //entra en el apartado para guardar el registro
        } catch (QueryException $ex) {
            //cachando excepcion y retornando a la vista
            return back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $pagecontent, $id, $idapartado)
    {
        $allcategories = $this->allCategories();
        /**
         * hacer consulta de datos para mostrar una colección
         */
        $query = CatSubcategoria::select('nombre', 'ruta_archivo', 'titulo_documento')->where(['cat_categoria_id' => $id, 'activo' => 1])->get();
        // modificaciones para checar el sistema
        return view('theme.dashboard.forms.formaddsubcategories', compact( 'allcategories', 'slug', 'id', 'pagecontent', 'idapartado', 'query'));

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

    public function fileUploadPost(Request $request)
    {
        /**
         * vamos a modificar el servicio
         */
        $validatedData = $request->validate([
            'documentoSubcategoria' => 'required',
            'subcategoria' => 'required',
            'titulo_documento' => 'required'
        ], [
            'documentoSubcategoria.required' => 'El documento es requerido',
            'subcategoria.required' => 'La subcategoría es requerida',
            'titulo_documento.required' => 'el título del documento es requerido'
        ]);

        try {
            // se trabaja insertando el dato en la base de datos y subiendo el archivo al servidor
            $habilitado = (empty($request->get('activo')) ? false : true);
            $subcategorias = new CatSubcategoria;
            $subcategorias->nombre = $request->get('subcategoria');
            $subcategorias->titulo_documento = $request->get('titulo_documento');
            $subcategorias->cat_categoria_id = $request->get('idcategoria');
            $subcategorias->activo = $habilitado;
            $subcategorias->save();
            #obtener el último id insertado
            $lastId = $subcategorias->id;
            /**
             * empezamos a trabajar para cargar el archivo
             */
            if ($request->hasFile('documentoSubcategoria')) {
               # obtenemos el valor del comunicado
               $img_guardada = CatSubcategoria::where('id', $lastId)->value('ruta_archivo');
               // checamos que no sea nulo
               if (!is_null($img_guardada)) {
                   # si no está nulo checamos que no esté vacio
                   if (!empty($img_guardada)) {
                       # si no está vacio
                       $docImagen = explode("/",$img_guardada, 5);
                        if (Storage::exists($docImagen[4])) {
                            # checamos si hay un documento de ser así procedemos a eliminarlo
                            Storage::delete($docImagen[4]);
                        }
                   }
               }

               $remplazartitulodocumento = str_replace(" ", "_", $this->eliminar_acentos($request->get('titulo_documento')));

               $archivo_subcategoria = $request->file('documentoSubcategoria'); # obtenemos el archivo
               $url_archivo = $this->uploadFile($archivo_subcategoria, $lastId, $remplazartitulodocumento , $request->slug); #invocamos el método
               // creamos un arreglo
               $array_subcategoria = [
                   'ruta_archivo' => $url_archivo
               ];

               // vamos a actualizar el registro con el arreglo que trae diferentes variables y carga de archivos
               CatSubcategoria::WHERE('id', $lastId)->update($array_subcategoria);

               // limpiamos el arreglo
               unset($array_subcategoria);
               /**
                * redireccionamos
                */
                return redirect()->route('form_add_subcateogires', [$request->slug, $request->page_content, $request->idcategoria, $request->idapartado])->with('success', 'Subcategoria Agregada exitosamente.');
            }
        } catch (QueryException $th) {
            //cachando excepcion y retornando a la vista
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
}
