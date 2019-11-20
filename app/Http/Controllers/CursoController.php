<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Categoria;
use App\Models\Instructor;

class CursoController extends Controller
{
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
        // return view('', compact);
        // return redirect()->route('oferta-educativa');
        return view('pages.ofertaeducativa', compact('categorias'));
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
                        ->JOIN('administrativebodies', 'cursos.unidadAccionMovil', '=', 'administrativebodies.id')
                        ->get();
        // dd($cursos);
        // return view('', compact);
        // return redirect()->route('oferta-educativa');
        return view('pages.cursos', compact('cursos'));
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
        $instructor = new Instructor();
        $instructores = $instructor::all();
        return view('pages.instructores', compact('instructores'));
    }
}
