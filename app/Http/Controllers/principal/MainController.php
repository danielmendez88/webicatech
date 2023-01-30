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
use App\Models\Categoria;
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

    public function gettransparencia()
    {
        /**
         * consulta de transparencia
         */
        $programactividades_codigo = array(
            'Informe del Plan Anual de Desarrollo Archivístico 2023' => 'archivtransparencia/INFORME_PADA_2023.pdf',
            'Plan Anual de Desarrollo Archivístico 2023' => 'archivtransparencia/PLAN_ANUAL_DE_DESARROLLO_ARCHIVISTICO_2023.pdf'
        );
        /**
         * consulta para obtener las categorias y subcategorias
         */
        // $apartados = Apartado::select('apartados.titulo', 'apartados.sub_apartado_id')
        //                 ->join('sub_apartado', 'apartados.sub_apartado_id', '=', 'sub_apartado.id')
        //                 ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
        //                 ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
        //                 ->where(['apartados.activo' => 1, 'pages.slug_path' => 'cuenta_publica'])
        //                 ->get();
        // $subtransparencia = CatSubcategoria::select('catalogo_subcategoria.nombre', 'catalogo_subcategoria.ruta_archivo', 'catalogo_subcategoria.titulo_documento', 'catalogo_subcategoria.id')
        //             ->join('apartados', 'catalogo_subcategoria.apartados_id', '=', 'apartados.id')
        //             ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
        //             ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
        //             ->where(['pages.slug_path' => 'cuenta_publica', 'catalogo_subcategoria.activo' => 1])
        //             ->get();
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.transparencia.index', compact('bprincipal', 'programactividades_codigo'));
    }

    public function getnormatividad(){

        $queryNormatividad = Apartado::select('apartados.id', 'apartados.titulo', 'apartados.descripcion', 'sub_apartado.nombre')
            ->join('sub_apartado', 'sub_apartado.id', '=', 'apartados.sub_apartado_id')
            ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
            ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
            ->where(['pages.slug_path' => 'normatividad', 'catalogo_categoria.activo' => 1])
            ->get();
        /**
         * subcategoria normatividad
         */

        $subQueryNormatividad = CatSubcategoria::select('catalogo_subcategoria.titulo_documento', 'catalogo_subcategoria.ruta_archivo', 'catalogo_subcategoria.apartados_id')
                                    ->join('apartados', 'catalogo_subcategoria.apartados_id', '=', 'apartados.id')
                                    ->join('sub_apartado', 'apartados.sub_apartado_id', '=', 'sub_apartado.id')
                                    ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
                                    ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
                                    ->where(['pages.slug_path' => 'normatividad', 'catalogo_subcategoria.activo' => 1])
                                    ->get();
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.normatividad.index', compact('bprincipal', 'queryNormatividad', 'subQueryNormatividad'));
    }

    public function getconocenos()
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.conocenos', compact('bprincipal'));
    }

    public function getcobertura()
    {
        $array_unidades_cap_movil = [
            array('Unidad de Capacitación Comitán', 'Antiguo camino a La Trinitaria s/n, Col. Parque Industrial C.P. 30000 Comitán de Domínguez, Chiapas.', 'Conmutador: (963) 63 2 76 99 Teléfono: (963) 63 2 76 99 Fax: (963) 63 2 76 99'),
            array('Unidad de Capacitación Jiquipilas', 'Predio Nueva Aurora, Cerrada Prolongación de la 1a. Pte. s/n. Col. Juan Sabines., Col. Centro C.P. 30431 Jiquipilas, Chiapas.', 'Teléfono: (968) 6 81 10 29'),
            array('Unidad de Capacitación Catazajá', 'Blvd. Tuxtla Gutiérrez s/n. C.P. 29980 , Barrio Sagrado Corazón de Jesus C.P. 29980 Catazajá, Chiapas.', 'Teléfono: (916) 3660060'),
            array('Unidad de Capacitación Reforma', 'Calle Chihuahua S/N. entre Prol. Chihuahua y calle Aguascalientes. Zona V-A, Mna. R-71. , Col. Adolfo López Mateos C.P. 29500 Reforma, Chiapas.', 'Teléfono: (917) 32 8 89 73 Fax: (917) 32 8 89 73'),
            array('Unidad de Capacitación Tapachula', 'Calle Juana de Arco S/N; entre Blvd. Palacios y Ceballa. Col. Octavio Paz. C.P. 30784 , Col. Octavio Paz C.P. 30784 Tapachula, Chiapas.', 'Conmutador: (962) 62 6 66 51 Teléfono: (962) 62 6 66 51 Fax: (962) 62 6 66 51'),
            array('Unidad de Capacitación San Cristóbal de Las Casas', 'Avenida Patzcuaro s/n, Lagos de María Eugenia San Cristóbal de las Casas, Chiapas.', 'Teléfono: 01 967 110 8080'),
            array('Unidad de Capacitación Tuxtla Gutiérrez', 'Av. Barrio San Jacinto N° 154, entre calle Pájaros y calle Conejos, Fracc. El Diamante C.P. 29000 Tuxtla Gutiérrez, Chiapas.', 'Teléfono: (961) 26 4 02 51'),
            array('Unidad de Capacitación Tonalá', 'Carretera Tonalá-Paredón km 3.5 , Col. La Victoria C.P. 30500 Tonalá, Chiapas.', ''),
            array('Unidad de Capacitación Ocosingo', '2ª. Calle Poniente Sur No. 209 entre 5ª Sur Ote y 6ª Sur Ote, Barrio Guadalupe C.P. 29950 Ocosingo, Chiapas.', ''),
            array('Unidad de Capacitación Villaflores', 'Carretera villaflores la sirena km 1.5 , Predio El Jauey C.P. 30470 Villaflores, Chiapas.', ''),
            array('Unidad de Capacitación Yajalón', 'Prologación de la 2a. Av. Norte Poniente s/n. , Barrio El Campo C.P. 29930 Yajalón, Chiapas.', 'Teléfono: 01 919 67 40388'),
        ];
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.cobertura', compact('bprincipal', 'array_unidades_cap_movil'));
    }

    public function getofertaeducativa()
    {
        $categoria = new Categoria();
        $categorias = $categoria::whereNotIn('id', [7, 8, 9, 10, 11, 6])->get();
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.ofertaeducativa', compact('bprincipal', 'categorias'));
    }

    public function getrevista(){
        $bprincipal = $this->getBanner('banner_principal');
        $revista = Banner::select('banner.id', 'banner.nombre', 'banner.activo', 'banner.path', 'banner.tipo_archivo', 'banner.slug', 'catalogo_banner.nombre_ubicacion', 'banner.href', 'banner.documento')
                ->join('catalogo_banner', 'catalogo_banner.id', '=', 'banner.id_catbanner')
                ->where([['banner.activo','=', true],['catalogo_banner.codigo','=', 'revista']])
                ->latest('banner.created_at')->paginate(6);
        return view('pages.revista', compact('revista', 'bprincipal'))->render();
    }

    public function getcuentapublica(){
        $queryCuentaPublica = Apartado::select('apartados.id', 'apartados.titulo', 'apartados.descripcion', 'sub_apartado.nombre')
                                ->join('sub_apartado', 'sub_apartado.id', '=', 'apartados.sub_apartado_id')
                                ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
                                ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
                                ->where(['pages.slug_path' => 'cuenta_publica', 'catalogo_categoria.activo' => 1])
                                ->get();
        /**
         * 
         */
        $subQueryCuentaPublica = CatSubcategoria::select('catalogo_subcategoria.titulo_documento', 'catalogo_subcategoria.ruta_archivo', 'catalogo_subcategoria.apartados_id')
                                    ->join('apartados', 'catalogo_subcategoria.apartados_id', '=', 'apartados.id')
                                    ->join('sub_apartado', 'apartados.sub_apartado_id', '=', 'sub_apartado.id')
                                    ->join('catalogo_categoria', 'sub_apartado.cat_id', '=', 'catalogo_categoria.id')
                                    ->join('pages', 'catalogo_categoria.id', '=', 'pages.categoria_id')
                                    ->where(['pages.slug_path' => 'cuenta_publica', 'catalogo_subcategoria.activo' => 1])
                                    ->get();
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.cuenta_publica.index', compact('bprincipal', 'queryCuentaPublica', 'subQueryCuentaPublica'));
    }
}
