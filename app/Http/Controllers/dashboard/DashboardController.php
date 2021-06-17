<?php
/**
 * CREADO Y DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ
 */
namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Database\QueryException;
/**
 * imports
 */
use App\Models\CatCategoria;
use App\Traits\CatTrait;
use App\Models\Pages;

class DashboardController extends Controller
{
    use CatTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allcategories = $this->allCategories();
        return view('theme.dashboard.contenido.main_content', compact('allcategories'));
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
        $validatedData = $request->validate([
            'seccion' => 'required|min:5',
        ], [
            'seccion.required' => 'Sección es requerida',
        ]);
        /**
         * sección try catach
         */
        try {
            $varval = (empty($request->estado) ? false : true);
            
            //Código que se ejecuta
            $categoriaModel = new CatCategoria;
            $categoriaModel->nombre = $request->seccion;
            $categoriaModel->activo = $varval;
            // guardar el registro
            $categoriaModel->save();
            //categoria id
            $catId = $categoriaModel->id;
            // guardar información en la tabla pages
            $strseccion = strtolower($request->seccion);
            $strrepaceseccion = str_replace(" ", "_", $strseccion);
            $seccionstrdefinitiva = $this->eliminar_acentos($strrepaceseccion);
            $generateString = Pages::generateStrings($catId);
            $urlConstruccion = "/dashboard/admin/".str_slug($seccionstrdefinitiva, '-')."/".$generateString;
            $pagina = new Pages;
            $pagina->titulo = $request->seccion;
            $pagina->slug = $urlConstruccion;
            $pagina->page_content = $generateString;
            $pagina->categoria_id = $catId;
            $pagina->slug_path = $seccionstrdefinitiva;
            $pagina->save();
            // redireccionamos a la sección
            return redirect()->route('main_form_admin')->with('success','Categoria Agregada exitosamente!');
        } catch (QueryException $ex) {
            //throw $th;
            return back()->with('error', $ex->getMessage());
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

    public function createForm(){
        /**
         * CONSULTA
         */
        $allcategories = $this->allCategories();
        $categoria = CatCategoria::all();
        return view('theme.dashboard.forms.formadmin', compact('categoria' , 'allcategories'));
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
