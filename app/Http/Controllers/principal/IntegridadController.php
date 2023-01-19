<?php

namespace App\Http\Controllers\principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\bannerTrait;

class IntegridadController extends Controller
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
    public function getintroduccion()
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.introduccion', compact('bprincipal'));
    }
    protected function getobjetivo()
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.objetivo', compact('bprincipal'));
    }
    protected function getactainstalacion()
    {
        /**
         * agregando un arreglo bidimensional
         */
        $array_acta_instalacion_cepci = [
            'Acta de Instalación CEPCI' => 'codigos_conducta/acta_instalacion_cepci.pdf'
        ];
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.acta_instalacion', compact('bprincipal', 'array_acta_instalacion_cepci'));
    }

    protected function getdirectoriocepci()
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.directorio_cepci', compact('bprincipal'));
    }
    protected function getcondigoconducta(){
        $array_codigo_conducta = array(
            'Codigo de Conducta ICATECH' => 'codigos_conducta/CODIGO_CONDUCTA_APROBADO_2022.pdf',
        );
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.codigo_conducta', compact('bprincipal', 'array_codigo_conducta'));
    }
    protected function getquejasodenuncias()
    {
        $array_atencion_quejas_denuncias = array(
            'Protocolo de Atención de Denuncias 2022' => 'codigos_conducta/PROTOCOLO_DE_ATENCION_DE_DENUNCIAS_2022.pdf'
        );
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.protocolo_atencion_quejas_denuncias', compact('bprincipal', 'array_atencion_quejas_denuncias'));
    }
    protected function getpronunciamiento(){
        $array_cero_tolerancia = [
            'Pronunciamiento Cero Tolerancia a las Conductas de Hostigamiento Sexual y Acoso Sexual 2022' => 'codigos_conducta/PRONUNCIAMIENTO_CERO_TOLERANCIA.pdf',
            'Pronunciamiento Cero Tolerancia a las Conductas de Hostigamiento Sexual y Acoso Sexual 2021' => 'codigos_conducta/pronunciamiento_cero_tolerancia_a_las_conductas_de_has_2021.pdf',
        ];
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.pronunciamiento', compact('bprincipal', 'array_cero_tolerancia'));
    }
    protected function getdirectorioconsejeros()
    {
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.directorio_consejeros', compact('bprincipal'));
    }
    protected function getdirectorioasesores(){
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.directorio_asesores', compact('bprincipal'));
    }
    protected function getinformeanualactividades()
    {
        $array_informe_anual = array(
            'Informe Anual de Actividades 2021'=> 'codigos_conducta/informe_anual_de_actividades_2021.pdf',
            'Informe Anual de Actividades 2022' => 'codigos_conducta/informe_anual_de_actividades_2022.pdf',
        );
        $bprincipal = $this->getBanner('banner_principal');
        return view('theme.main.integridad.informe_anual_actividades', compact('bprincipal', 'array_informe_anual'));
    }
}
