<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Categoria;
use App\Models\Instructor;
use Illuminate\Support\Facades\Response;
/**
 * imports
 */
use App\Traits\bannerTrait;

class CursoController extends Controller
{
    use bannerTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = new Categoria();
        $categorias = $categoria::WHERE('id', '!=', 6)->get();
        $bprincipal = $this->getBanner('banner_principal');
        // return view('', compact);
        // return redirect()->route('oferta-educativa');
        return view('pages.ofertaeducativa', compact('categorias', 'bprincipal'));
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
    public function show($id, $categoria)
    {
        //
        $curso = new Curso();
        $cursos = $curso::WHERE('categoria_id', '=', $id)
                        ->JOIN('categoria', 'cursos.categoria_id', '=', 'categoria.id')
                        ->get();
        // dd($cursos);
        // return view('', compact);
        // return redirect()->route('oferta-educativa');
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.cursos', compact('cursos', 'bprincipal'));
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
    
    public function instructores()
    {
        $bprincipal = $this->getBanner('banner_principal');
        $instructor = new Instructor();
        $instructores = $instructor::paginate(7);
        return view('pages.instructores', compact('instructores', 'bprincipal'));
    }

    protected function searchCursosByParam(Request $request){
        $cursoResult =  Curso::where("curso",'LIKE', $request->busqueda."%")->take(10)->get();
        return Response::json($cursoResult);
    }

    public function getcatfactibilidad(){
        $arr_imagenes = ['1' => 'unidad_tuxtla.pdf','2' => 'unidad_ocosingo.pdf','3' => 'unidad_tapachula.pdf', '4' => 'unidad_reforma.pdf', '5' => 'unidad_comitan.pdf', '6' => 'unidad_sancristobal.pdf', '7' => 'unidad_yajalon.pdf', '8' => 'unidad_villaflores.pdf', '9' => 'unidad_catazaja.pdf', '10' => 'unidad_jiquipilas.pdf', '11' => 'unidad_tonala.pdf'];
        $bprincipal = $this->getBanner('banner_principal');
        return view('pages.factibilidad.cursos_factibilidad', compact('bprincipal', 'arr_imagenes'));
    }
}
