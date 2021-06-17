<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\uploadFileTrait;

/**
 * imports
 */
use App\Traits\CatTrait;
use App\Models\CatBanner;
use App\Models\Banner;
use Illuminate\Database\QueryException;
use Response;

class BannerSectionController extends Controller
{
    use CatTrait;
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
        // se procede a guardar el banner en la base de datos url
        // utilizamos una funcion try catch
        try {
            //si se entra al método se tiene que ingresar el registro
            if (isset($_POST['image'])) {
                # si se ha inicializado el valor de la imagen entra en el siguiente paso
                $imagen = $_POST['image'];
                $fecha = $_POST['_fecha'];
                $titulo = $_POST['_titulo'];
                $banner = $_POST['banner'];
                $data = $_POST['activo'];
                /**
                 * empezamos a utilizar el arreglo
                 */
                $image_array_1 = explode(";", $imagen);
                /**
                 * obtenemos el siguiente arreglo de la matriz que se genero anteriormente
                 */
                $image_array_2 = explode(",", $image_array_1[1]);
                /**
                 * decodificamos la imagen
                 */
                $imagendecodificada = base64_decode($image_array_2[1]);
                return Response::json($banner);
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
}
