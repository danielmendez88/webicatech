<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectosController extends Controller
{
    //
    protected function index(){
        return view('pages\sigi\prospectosalumnos');
    }

    //
    protected function store(Request $request){

    }
}
