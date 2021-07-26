<?php
/**
 * elaborado por MIS. DANIEL MÉNDEZ CRUZ
 */
namespace App\Http\Controllers\principal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Traits\bannerTrait;
use App\Models\CatSubcategoria;
use App\Models\Apartado;
/**
 * se utilizaran los controladores y modelos
 */
use App\Models\Comunidado;

class MainController extends Controller
{
    use bannerTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunicado_cintilla = Comunidado::latest()->take(5)->get();
        $comunicados = Comunidado::latest()->take(3)->get();
        $bprincipal = $this->getBanner('banner_principal');
        $btransparencia = $this->getBanner('transparencia');
        $bsecundario = $this->getBanner('banner_secundario');
        $brevista = $this->getBanner('revista');
        $bvideoteca = $this->getBanner('videoteca');
        // se tiene que hacer una carga de los registros
        return view('inicio', compact('bprincipal', 'btransparencia', 'bsecundario', 'brevista', 'bvideoteca', 'comunicado_cintilla', 'comunicados'));
    }

    public function noticias(){
        return view('inicio');
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

    public function gettransparencia(){
        /**
         * consulta para obtener las categorias y subcategorias
         */
        $apartados = Apartado::select('apartados.titulo', 'apartados.cat_id')
                        ->where(['apartados.activo' => 1, 'apartados.cat_id' => 14])
                        ->get();
        $subtransparencia = CatSubcategoria::select('catalogo_subcategoria.nombre', 'catalogo_subcategoria.ruta_archivo', 'catalogo_subcategoria.titulo_documento', 'catalogo_subcategoria.cat_categoria_id', 'catalogo_subcategoria.id')
                    ->where(['catalogo_subcategoria.cat_categoria_id' => 14, 'catalogo_subcategoria.activo' => 1])
                    ->get();
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.transparencia.index', compact('bprincipal', 'subtransparencia', 'apartados'));
    }

    public function getnormatividad(){
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.normatividad.index', compact('bprincipal'));
    }
}
