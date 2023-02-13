<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PDF;
use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class AlumnoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /*$municipio = new Municipio();
        $estado = new Estado();
        $municipios = $municipio->all();
        $estados = $estado->all();*/
        // return view('sid', compact('municipios', 'estados'));
        $client = new Client();
        $response = $client->request('GET', 'https://www.sivyc.icatech.gob.mx/api/municipios', ['verify' => false]);
        $datam = json_decode($response->getBody());

        $response = $client->request('GET', 'https://www.sivyc.icatech.gob.mx/api/estados', ['verify' => false]);
        $datae = json_decode($response->getBody());
        return view('pages.aspirante', compact('datae','datam')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curp = strtoupper($request->input('curp'));
        //$alumnoPre = Alumnopre::WHERE('curp', '=', $curp)->GET();
        //if ($alumnoPre->isEmpty()) {
            # si la consulta no está vacía hacemos la inserción
            $validator =  Validator::make($request->all(), [
                'nombre' => 'required',
                'apellidoPaterno' => 'required',
                'apellidoMaterno' => 'required',
                'sexo' => 'required',
                'curp' => 'required',
                'fecha_nacimiento' => 'required',
                'telefono' => 'required',
                'domicilio' => 'required',
                'colonia' => 'required',
                'cp' => 'required',
                'estado' => 'required',
                'municipio' => 'required',
                'estado_civil' => 'required',
                'discapacidad' => 'required',
            ]);
            if ($validator->fails()) {
                # devolvemos un error
                dd('devolvemos error');
                return redirect('/aspirante')
                        ->withErrors($validator)
                        ->withInput();
            } else {
                $client = new \GuzzleHttp\Client(['verify' => false]);

                dd("paso");

                $data   = [
                        "nombre" => trim($this->antiScript($request->nombre)),
                        "apellidoPaterno" => trim($this->antiScript($request->apellidoPaterno)),
                        "apellidoMaterno" => trim($this->antiScript($request->apellidoMaterno)),
                        "sexo" => trim($this->antiScript($request->sexo)),
                        "curp" => trim($this->antiScript($request->curp)),
                        "fecha_nacimiento" => trim($this->antiScript($request->fecha_nacimiento)),
                        "telefono" => trim($this->antiScript($request->telefono)),
                        "domicilio" => trim($this->antiScript($request->domicilio)),
                        "colonia" => trim($this->antiScript($request->colonia)),
                        "cp" => trim($this->antiScript($request->cp)),
                        "estado" => trim($this->antiScript($request->estado)),
                        "municipio" => trim($this->antiScript($request->municipio)),
                        "estado_civil" => trim($this->antiScript($request->estado_civil)),
                        "discapacidad"=> trim($this->antiScript($request->discapacidad))
                ];

                $response = $client->request('POST', 'https://www.sivyc.icatech.gob.mx/api/alumnopre', [
                    'form_params' => $data,
                ]);



               // $response = $client->post("/api/alumnopre", $data, ['verify' => false],);

                //echo $response->getBody();



                return redirect('/aspirante')->with('success', 'Nuevo Alumno Agregado Exitosamente!');
            }

        /*} else {
            # por el contrario si no está vacía mandamos un mensaje al usuario
            #Mensaje
            dd('curp');
            $mensaje = "Lo sentimos, la curp ".$curp." asociada a este registro ya se encuentra en la base de datos.";
            return redirect('/aspirante')->withErrors($mensaje);
        }*/
    }
    /**
     * formulario número 2
     */
    protected function createpaso2sid()
    {
        return view('layouts.pages.frminscripcion2');
    }

    public function pdf_registro()
    {
        $pdf = PDF::loadView('layouts.pdfpages.registroalumno');

        return $pdf->stream('registro.pdf');
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
}
