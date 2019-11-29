<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuentapublicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        // aqui vamos a crear nuestro arreglo
        $inf_financiera = array(
            'Bienes Patrimoniales' => 'cuenta_publica/pt2019/financiera/bienespatrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/pt2019/financiera/formatosanalisis.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/pt2019/financiera/formatosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/pt2019/financiera/formatosleydisciplinafinanciera.pdf'
        );
        $inf_presupuestal = array(
            'Información Presupuestaria' => 'cuenta_publica/pt2019/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/pt2019/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/pt2019/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/pt2019/presupuestal/ldf.pdf'
        );
        $inf_financiera2= array(
            'Bienes Patrimoniales' => 'cuenta_publica/st2019/financiera/bienespatrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/st2019/financiera/formatosdeanalisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/st2019/financiera/armonizadosconac.pdf',
            'Formatos Ley de Disciplina Financiera' =>'cuenta_publica/st2019/financiera/leydisciplinafinanciera.pdf'
        );
        $inf_presupuestal2 = array(
            'Información Presupuestaria' => 'cuenta_publica/st2019/presupuestal/informacionpresupuestaria.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/st2019/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/st2019/presupuestal/armonizadosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/st2019/presupuestal/leydisciplinafinanciera.pdf'
        );
        $inf_financiera3 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/tt2019/financiera/BIENESPATRIMONIALES.pdf',
            'Formatos de Analisis' => 'cuenta_publica/tt2019/financiera/FORMATOSDEANALISIS.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/tt2019/financiera/ARMONIZADOSCONAC.pdf',
            'Formatos Ley de Disciplina Financiera' =>'cuenta_publica/tt2019/financiera/LEYDEDISCIPLINAFINANCIERA.pdf'
        );
        $inf_presupuestal3 = array(
            'Información Presupuestaria' => 'cuenta_publica/tt2019/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/tt2019/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/tt2019/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/tt2019/presupuestal/ldf.pdf'
        );  
        
        $inf_financiera18 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/2018/st2018/financiera/bienes.pdf',
            'Formatos de Analisis' => 'cuenta_publica/2018/st2018/financiera/fmtosanalisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/2018/st2018/financiera/fmtosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/st2018/financiera/fmtosldf.pdf'
        );

        $inf_presupuestal18 =array(
            'Información Presupuestaria' => 'cuenta_publica/2018/st2018/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/2018/st2018/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/2018/st2018/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/st2018/presupuestal/ldf.pdf'
        );

        $inf_financiera182t = array(
            'Bienes Patrimoniales' => 'cuenta_publica/2018/st2018/financiera/bienes.pdf',
            'Formatos de Analisis' => 'cuenta_publica/2018/st2018/financiera/fmtosanalisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/2018/st2018/financiera/fmtosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/st2018/financiera/fmtosldf.pdf'
        );

        $inf_presupuestal182t =array(
            'Información Presupuestaria' => 'cuenta_publica/2018/st2018/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/2018/st2018/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/2018/st2018/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/st2018/presupuestal/ldf.pdf'
        );

        $inf_financiera183t = array(
            'Bienes Patrimoniales' => 'cuenta_publica/2018/tt2018/financiera/bienes.pdf',
            'Formatos de Analisis' => 'cuenta_publica/2018/tt2018/financiera/fmtosanalisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/2018/tt2018/financiera/fmtosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/tt2018/financiera/fmtosldf.pdf'
        );

        $inf_presupuestal183t =array(
            'Información Presupuestaria' => 'cuenta_publica/2018/tt2018/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/2018/tt2018/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/2018/tt2018/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/tt2018/presupuestal/ldf.pdf'
        );

        $inf_financiera184t = array(
            'Bienes Patrimoniales' => 'cuenta_publica/2018/ct2018/financiera/bienes.pdf',
            'Formatos de Analisis' => 'cuenta_publica/2018/ct2018/financiera/fmtosanalisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/2018/ct2018/financiera/fmtosconac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/ct2018/financiera/fmtosldf.pdf'
        );

        $inf_presupuestal184t =array(
            'Información Presupuestaria' => 'cuenta_publica/2018/ct2018/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/2018/ct2018/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/2018/ct2018/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/2018/ct2018/presupuestal/ldf.pdf'
        );
        
        return view('pages.cuentapublica', ['infFin'=> $inf_financiera, 'infPre'=>$inf_presupuestal,'infFin2'=>$inf_financiera2, 'infPre2'=> $inf_presupuestal2, 'infFin3'=> $inf_financiera3, 'infPre3'=> $inf_presupuestal3, 
        'inffin18'=> $inf_financiera18, 'infpres18'=> $inf_presupuestal18, 'inffin182t'=> $inf_financiera182t, 'infpres182t'=> $inf_presupuestal182t, 'inffint183t'=> $inf_financiera183t, 'infpres183t'=> $inf_presupuestal183t,
        'inffin184t'=> $inf_financiera184t, 'infpres184t'=> $inf_presupuestal184t]);


    }

    public function normatividad()
    {
        $dec_decretos = array(
            'Decreto de Creación' => 'normatividad_/decretos/decreto-de-creacion.pdf',
            'Decreto Modificatorio' => 'normatividad_/decretos/decreto-modificatorio.pdf'
        );

        $reg_reglamentos = array(
            'Reglamento Interior 2018' => 'normatividad_/reglamentos/reglamento_interior2018.pdf'
        );

        $man_induccion =array(
            'Manual de Inducción 2018' => 'normatividad_/manuales/induccion/manual_induccion2018.pdf'
        );

        $manu_procedimientos =array(
            'Manual de Procedimientos' => 'normatividad_/manuales/procedimientos/procedimientos.pdf',
            '-Comisaria' => 'normatividad_/manuales/procedimientos/1comisaria.pdf',
            '-Unidad Jurídica' => 'normatividad_/manuales/procedimientos/2unidad_juridica.pdf',
            '-Unidad Ejecutiva' => 'normatividad_/manuales/procedimientos/3Unidad_Ejecutiva.pdf',
            '-Dirección Administrativa' => 'normatividad_/manuales/procedimientos/4direccion_administrativa.pdf',
            '-Dirección de Planeación' => 'normatividad_/manuales/procedimientos/5direccion_de_planeacion.pdf',
            '-Dirección Técnica Academica' => 'normatividad_/manuales/procedimientos/6direccion_tecnica_academica.pdf',
            '-Dirección de Vinculación con el Sector Productivo' => 'normatividad_/manuales/procedimientos/7direccion_de_vinculacion.pdf',
            '-Unidades de Capacitación' => 'normatividad_/manuales/procedimientos/8unidades_de_capacitacion.pdf',
            '-Glosario de Terminos y Grupo de Trabajos' => 'normatividad_/manuales/procedimientos/9glosario_de_terminos_y_trabajo.pdf'
            
        );

        $manu_organizacion =array(
            'Manual de Organizacion' => 'normatividad_/manuales/organizacion/organizacion.pdf',
            'Manual de Organizacion -Organigramas y Funciones Parte 1' => 'normatividad_/manuales/organizacion/organigramas_y_funciones_1.pdf',
            'Manual de Organizacion -Organigramas y Funciones Parte 2' => 'normatividad_/manuales/organizacion/organigramas_y_funciones_2.pdf',
            'Manual de Organizacion -Glosario de Terminos de Trabajo' => 'normatividad_/manuales/organizacion/glosario_de_terminos_y_trabajo.pdf'
        );

        
        return view('pages.normatividad', ['deccrea'=> $dec_decretos, 'reglam'=> $reg_reglamentos, 'manual'=> $man_induccion,
        'manualproc'=> $manu_procedimientos, 'manualorga'=> $manu_organizacion,]);

    }

    public function licitaciones()
    {
        $lic_federales =array(
            '- Acta de Junta de Aclaración de Dudas' => 'licitaciones_/federal/acta_de_aclaracion_de_dudas3 .pdf',
            '- Acta de Apertura de Propuestas Técnicas y Económicas' => 'licitaciones_/federal/acta_de_apertura_de_propuestas.pdf',
            '- Acta de Fallo' =>'licitaciones_/federal/acta_de_fallo.pdf',
        );

        $lic_federales2 =array(
            '- Acta de Junta de Aclaración de Dudas' => 'licitaciones_/federal/acta_de_jaictp-002_2019.pdf',              
            '- Acta de Apertura de Propuestas Técnicas y Económicas' => 'licitaciones_/federal/acta_de_apertura_propuestas_icatech_ictp_002_2019.pdf',
            '- Acta Circunstanciada 001' => 'licitaciones_/federal/acta_circunstanciada_ictp-002_2019.pdf',
            '- Acta de Fallo' => 'licitaciones_/federal/fallo_icatech_ictp-002_2019.pdf',
        );
        
        $lic_federales3 =array(
            '- Acta de Junta de Aclaración de Dudas' => 'licitaciones_/federal/acta_de_jaictp-003_2019.pdf',                   
            '- Acta de Apertura de Propuestas Técnicas y Económicas' => 'licitaciones_/federal/acta_de_apertura_propuestas_icatech_ictp_003_2019.pdf',                  
            '- Acta Circunstanciada 002' => 'licitaciones_/federal/acta_circunstanciada_ictp-003_2019.pdf',                       
            '- Acta de Fallo' => 'licitaciones_/federal/fallo_icatech-ictp-003_2019.pdf'

        );


        return view('pages.licitaciones', ['licfed'=> $lic_federales, 'licfed2'=> $lic_federales2, 'licfed3'=> $lic_federales3]);
    }

    public function sevac()
    {
        $prim_trimestre =array(
            'Montos pagados por concepto de ayudas y subsidios' => 'sevac_/2019/t1/D.1.11 Montos pagados por concepto de ayudas y subsidios.pdf',
            'Estado de Actividades' => 'sevac_/2019/t1/D.2.1 Estado de Actividades.pdf',
            'Estado de Situacion Financiera' => 'sevac_/2019/t1/D.2.2 Estado de Situacion Financiera.pdf',
            'Estado de Variación en la Hacienda Pública' => 'sevac_/2019/t1/D.2.3 Estado de Variacion en la Hacienda Publica.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2019/t1/D.2.4 Estado de Cambios en la Sit Financiera.pdf',
            'Estado de Flujos de efectivo' => 'sevac_/2019/t1/D.2.5 Estado de Flujo de Efectivos.pdf',
            'Informe sobre Pasivos Contignentes' => 'sevac_/2019/t1/D.2.6 Informe Sobre Pasivos Contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2019/t1/D.2.7 Notas a los Estados Financieros.pdf',
            'Estado Analitico del Activo' => 'sevac_/2019/t1/D.2.8 Estado Analitico del Activo.pdf',
            'Estado Analitico de la Deuda y Otros Pasivos' => 'sevac_/2019/t1/D.2.9 Estado Analitico de la Deuda.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2019/t1/D.3.1 Estado Analitico de Ingresos.pdf',
            'Estado Analitico con Clasificacion Administrativa' => 'sevac_/2019/t1/D.3.2 EdoAnaliticoconClasificacionAdmiva.pdf',
            'Estado Analitico con Clasificacion Economica por Tipo de Gasto' => 'sevac_/2019/t1/D.3.3 EdoAnaliticoconClasificacionAdmivaTipodeGto.pdf',
            'Estado Analitico con Clasificacion por Objeto del Gasto' => 'sevac_/2019/t1/D.3.4 EdoAnaliticoconClasificacionAdmivaxobjetoGto.pdf',
            'Estado Analitico con Clasific Funcional' => 'sevac_/2019/t1/D.3.5 EdoAnaliticoconClasificacionFuncional.pdf',
            'Endeudamiento Neto' => 'sevac_/2019/t1/D.3.6 Endeudamiento Neto.pdf',
            'Intereses de la Deuda' => 'sevac_/2019/t1/D.3.7 Intereses de la Deuda.pdf',
            'Gto por Categoria Programatica' => 'sevac_/2019/t1/D.4.1 Gto x Categoria Programatica.pdf',
            'Indicadores de Resultados' => 'sevac_/2019/t1/D.4.2 Indicadores de Resultados.pdf',
            'Prog y Proyectos de Inversion 1er Trimestre 2018' => 'sevac_/2019/t1/D.4.3 Prog y Proyectos de Inversion.pdf'

        );

        $seg_trimestre =array(
            'Estado Analitico de Ingresos' => 'sevac_/2019/t2/estadoanaliticodeingresos.pdf',
            'Estado Analitico del Activo Rubros' => 'sevac_/2019/t2/estadoanaliticodelactivorubros.pdf',
            'Estado Analitico de la Deuda y otros Pasos' => 'sevac_/2019/t2/estadoanaliticodeladeudayotrospasivos.pdf',
            'Estado de Actividades Rubros' => 'sevac_/2019/t2/estadodeactividadesrubros.pdf',
            'Estado de Cambio en la Situación Financiera' => 'sevac_/2019/t2/estadodecambiosenlasitfinanciera.pdf',
            'Estado de Flujo de Efectivo' => 'sevac_/2019/t2/estadodeflujodeefectivo.pdf',
            'Estado de Situación Financiera Rubros' => 'sevac_/2019/t2/estadodesitfinancierarubros.pdf',
            'Estado de Variación Hacienda Pública' => 'sevac_/2019/t2/estadodevariacionhdapublica.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2019/t2/notasalosestadosfinancieros.pdf',
            'Pasivos Contingentes' => 'sevac_/2019/t2/pasivoscontingentes.pdf'
        
        );

        $ter_trimestre =array(
            'Estado Analitico de la deuda y otros pasivos' => 'sevac_/2019/t3/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos.PDF',
            'Estado Analitico del Activo' => 'sevac_/2019/t3/Estado_Analitico_del_Activo.PDF',
            'Estado de Actividades'  => 'sevac_/2019/t3/Estado_de_Actividades.PDF',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2019/t3/Estado_de_Cambios_en_la_Situacion_Financiera.PDF',
            'Estado de Flujos de Efectivo' => 'sevac_/2019/t3/Estado_de_Flujos_de_Efectivo.PDF',
            'Estado de Situación Financiera' => 'sevac_/2019/t3/Estado_de_Situacion_Financiera_.PDF',
            'Estado de Variación de la Hacienda Pública' => 'sevac_/2019/t3/Estado_de_Variacion_de_la_Hacienda_Publica.PDF',
            'Informe sobre Pasivos Contingentes' => 'sevac_/2019/t3/Informe_Sobre_Pasivos_Contingentes.PDF',
            'Notas a los Estados Financieros' => 'sevac_/2019/t3/Notas_a_los_Estados_Financieros.PDF',
            'Relación de Cuentas Bancarias Productivos Espesificas' => 'sevac_/2019/t3/Relacion_de_Cuentas_Bancarias_Productivas_Especificas.pdf'
        );

        $prim_trimestre2018 =array(
            'Montos Pagados por Concepto de Ayudas y Subsidios' => 'sevac_/2018/t1/D.1.11_Montos_pagados_por_concepto_de_ayudas_y_subidios.pdf',
            'Estado de Actividades' => 'sevac_/2018/t1/D.2.1_Estado_de_Actividades.pdf',
            'Estado de Situacion Financiera' => 'sevac_/2018/t1/D.2.2_Estado_de_Situacion_Financiera.pdf',
            'Estado de Variacion en la Hacienda Publica' => 'sevac_/2018/t1/D.2.3_Estado_de_Variación_en_la_Hacienda_Pública.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2018/t1/D.2.4_Estado_de_Cambios_en_la_Sit_Financ.pdf',
            'Estado de Flujo de Efectivos' => 'sevac_/2018/t1/D.2.5_Estado_de_Flujos_de_efectivo.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2018/t1/D.2.6_Informe_sobre_Pasivos_Contignentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2018/t1/D.2.7_Notas_a_los_Estados_Financieros.pdf',
            'Estado Analitico del Activo' => 'sevac_/2018/t1/D.2.8_Estado_Analítico_del_Activo.pdf',
            'Estado Analitico de la Deuda' => 'sevac_/2018/t1/D.2.9_Estado_Analítico_de_la_deuda_y_otros_pasivos.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2018/t1/D.3.1_Estado_Analítico_de_Ingresos.PDF',
            'Estado Analitico con Clasificacion Administrativa 1er Trimestre 2018' => 'sevac_/2018/t1/D.3.2_Edo_Analitico_con_Clasificacion_Admva_1er_Trimestre_2018.pdf',
            'Estado Analitico con Clasificacion Ecónomica por Tipo de Gasto 1er Trimestre' => 'sevac_/2018/t1/D.3.3_Edo_Analitico_con_Clasificacion_Economica_por_Tipo_de_Gto_1er_Trimestre_2018.pdf',
            'Estado Analitico con Clasificacion por Objeto del gasto 1er Trimestre 2018' => 'sevac_/2018/t1/D.3.4_Edo_Analitico_con_Clasificacion_por_Objeto_del_Gto_1er_Trimestre_2018.pdf',
            'Estado Analitico con Clasificacion Funcional 1er Trimestre 2018' => 'sevac_/2018/t1/D.3.5_Edo_Analitico_con_Clasific_Funcional_1er Trimestre_2018.pdf',
            'Endeudamiento Neto' => 'sevac_/2018/t1/D.3.6_Endeudamiento_Neto.pdf',
            'Intereses de la Deuda' => 'sevac_/2018/t1/D.3.7_Intereses_de_la_Deuda.pdf',
            'Gasto por Categoria Programatica 1er Trimestre' => 'sevac_/2018/t1/D.4.1_Gto_por_Categoria_Programatica_1er_Trimestre_2018.pdf',
            'Indicadores de Resultados 1er Trimestre' => 'sevac_/2018/t1/D.4.2_Indicadores_de_Resultados_1er_trimestre_2018.pdf',
            'Programación y Proyectos de Inversion 1er Trimestre' => 'sevac_/2018/t1/D.4.3_Prog_y_Proyectos_de_Inversion_1er_Trimestre_2018.pdf'

        );

        $seg_trimestre2018 =array(
            'Montos Pagados por Concepto de Ayudas y Subsidios' => 'sevac_/2018/t2/D.1.11 Montos pagados por concepto de ayudas y subidios.pdf',
            'Estado de Actividades' => 'sevac_/2018/t2/D.2.1 Estado de Actividades.pdf',
            'Estado de Situacion Financiera' => 'sevac_/2018/t2/D.2.2 Estado de Situacion Financiera.pdf',
            'Estado de Variacion en la Hacienda Publica' => 'sevac_/2018/t2/D.2.3 Estado de Variación en la Hacienda Pública.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2018/t2/D.2.4 Estado de Cambios en la Sit Financiera.pdf',
            'Estado de Flujo de Efectivos' => 'sevac_/2018/t2/D.2.5 Estado de Flujo de Efectivos.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2018/t2/D.2.6 Informe Sobre Pasivos Contingentes.PDF',
            'Notas a los Estados Financieros' => 'sevac_/2018/t2/D.2.7 Notas a los Estados Financieros.PDF',
            'Estado Analitico del Activo' => 'sevac_/2018/t2/D.2.8 Estado Analítico del Activo.pdf',
            'Estado Analitico de la Deuda' => 'sevac_/2018/t2/D.2.9 Estado Analítico de la Deuda.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2018/t2/D.3.1 Estado Analítico de Ingresos.pdf',
            'Estado Analitico con Clasificacion Administrativa' => 'sevac_/2018/t2/D.3.2 EdoAnaliticoconClasificacionAdmva.pdf',
            'Estado Analitico con Clasificacion Ecónomica por Tipo de Gasto' => 'sevac_/2018/t2/D.3.3 EdoAnaliticoconClasificacionAdmvaTipodeGto.pdf',
            'Estado Analitico con Clasificacion por Objeto del gasto' => 'sevac_/2018/t2/D.3.4 EdoAnaliticoconClasificacionAdmvaxobjetoGto.pdf',
            'Estado Analitico con Clasificacion Funcional' => 'sevac_/2018/t2/D.3.5 EdoAnaliticoconClasificacionFuncional.pdf',
            'Endeudamiento Neto' => 'sevac_/2018/t2/D.3.6 Endeudamiento Neto.pdf',
            'Intereses de la Deuda' => 'sevac_/2018/t2/D.3.7 Intereses de la Deuda.pdf',
            'Gasto por Categoria Programatica' => 'sevac_/2018/t2/D.4.1 Gto x Categoria Programatica.pdf',
            'Indicadores de Resultados' => 'sevac_/2018/t2/D.4.2 Indicadores de Resultados.pdf',
            'Programación y Proyectos de Inversion' => 'sevac_/2018/t2/D.4.3 Prog y Proyectos de Inversion.pdf',

        );

        $terc_trimestre2018 =array(
            'Montos Pagados por Concepto de Ayudas y Subsidios' => 'sevac_/2018_/t3/D.1.11 Montos pagados por concepto de ayudas y subsidios.pdf',
            'Estado de Actividades' => 'sevac_/2018_/t3/D.2.1 Estado de Actividades.pdf',
            'Estado de Situacion Financiera' => 'sevac_/2018_/t3/D.2.2 Estado de Situacion Financiera.pdf',
            'Estado de Variacion en la Hacienda Publica' => 'sevac_/2018_/t3/D.2.3 Estado de Variacion en la Hacienda Publica.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2018_/t3/D.2.4 Estado de Cambios en la Sit Financiera.pdf',
            'Estado de Flujo de Efectivos' => 'sevac_/2018_/t3/D.2.5 Estado de Flujo de Efectivos.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2018_/t3/D.2.6 Informe Sobre Pasivos Contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2018_/t3/D.2.7 Notas a los Estados Financieros.pdf',
            'Estado Analitico del Activo' => 'sevac_/2018_/t3/D.2.8 Estado Analitico del Activo.pdf',
            'Estado Analitico de la Deuda' => 'sevac_/2018_/t3/D.2.9 Estado Analitico de la Deuda.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2018_/t3/D.3.1 Estado Analitico de Ingresos.pdf',
            'Estado Analitico con Clasificacion Administrativa' => 'sevac_/2018_/t3/D.3.2 EdoAnaliticoconClasificacionAdmiva.pdf',
            'Estado Analitico con Clasificacion Ecónomica por Tipo de Gasto' => 'sevac_/2018_/t3/D.3.3 EdoAnaliticoconClasificacionAdmivaTipodeGto.pdf',
            'Estado Analitico con Clasificacion por Objeto del gasto' => 'sevac_/2018_/t3/D.3.4 EdoAnaliticoconClasificacionAdmivaxobjetoGto.pdf',
            'Estado Analitico con Clasificacion Funcional' => 'sevac_/2018_/t3/D.3.5 EdoAnaliticoconClasificacionFuncional.pdf',
            'Endeudamiento Neto' => 'sevac_/2018_/t3/D.3.6 Endeudamiento Neto.pdf',
            'Intereses de la Deuda' => 'sevac_/2018_/t3/D.3.7 Intereses de la Deuda.pdf',
            'Gasto por Categoria Programatica' => 'sevac_/2018_/t3/D.4.1 Gto x Categoria Programatica.pdf', 
            'Indicadores de Resultados' => 'sevac_/2018_/t3/D.4.2 Indicadores de Resultados.pdf',
            'Programación y Proyectos de Inversion' => 'sevac_/2018_/t3/D.4.3 Prog y Proyectos de Inversion.pdf'
        );


        return view('pages.sevac', ['primtrim'=> $prim_trimestre, 'segtrim'=> $seg_trimestre, 'tertrim'=> $ter_trimestre, 'trim2018' => $prim_trimestre2018, 'segtrim2018' => $seg_trimestre2018, 'tertrim2018' => $terc_trimestre2018]);

    }

        

    public function avisosprivacidad()
    {

        $avisos_integrales =array(
            'ICATECH' => 'avisos_privacidad/integral/AVISO_INTEGRAL_ICATECH.pdf',
            'Dirección General' => 'avisos_privacidad/integral/AVISO_INTEGRAL_DIRECCION_G..pdf'
        );

        $avisos_ejecutiva =array(
            'Area de Infórmatica' => 'avisos_privacidad/integral/AVISO_INTEGRAL_INFORMATICA.pdf',
        );
        
        $avisos_juridico =array(
            'Unidad Juridica' => 'avisos_privacidad/integral/AVISO_INTEGRAL_JURIDICO.pdf',
            'Unidad de Transparencia (Derecho ARCO)' => 'avisos_privacidad/integral/AVISO_INTEGRAL_ARCO_TRANSP.pdf',
            'Unidad de Transparencia' => 'avisos_privacidad/integral/AVISO_INTEGRAL_SOLICITUDES_TRANSP.pdf'
        );

        $avisos_administrativa =array(
            'Departamento de Recursos Financieros (CDFI)' => 'avisos_privacidad/integral/AVISO_INTEGRAL_FINANCIERO.pdf',
            'Departamento de Recursos Humanos (Nomina)' => 'avisos_privacidad/integral/AVISO_INTEGRAL_RH_NOMINA_DE PAGO.pdf',            
            'Departamento de Recursos Humanos (Expediente Unico del Personal)' => 'avisos_privacidad/integral/AVISO_INTE_RH_EXPE_U.P.pdf',            
            'Departamento de Recursos Humanos (Sistema de Registro de Asistencia)' => 'avisos_privacidad/integral/AVISO_INTE_RH_REGISTRO_DE_ASISTENCIA.pdf',            
            'Departamento de Recursos Materiales (Proveedores)' => 'avisos_privacidad/integral/MATERIALES_AVISO_INTEGRAL_REGISTRO_DE_PROVEEDORES.pdf',            
            'Departamento de Recursos Materiales (Resguardos)' => 'avisos_privacidad/integral/MATERIALES_AVISO_INTEGRAL_RESGUARDOS_MOBILIARIO.pdf',            
            'Departamento de Recursos Materiales (Registro de Visitas)' => 'avisos_privacidad/integral/MATERIALES_AVISO_INTE_REGISTRO_DE_VISITANTES.pdf'
        );
        
        $avisos_planeacion =array(
            'Dirección de Planeación' => 'avisos_privacidad/integral/AVISO_INTEGRAL_PLANEACION.pdf',
        );    
          
        $avisos_vinculacion =array(
            'Dirección de Vinculacion' => '',
            'Direccion de Vinculación con el Sector Productivo' => 'avisos_privacidad/integral/AVISO_INTEGRAL_VINC._CONVENIOS_SEC_PROD..pdf',
            'Dirección de Vinculación Seguimiento a Egresados' => 'avisos_privacidad/integral/AVISO_INTEGRAL_VINC._SEGUIMIENTO_EGRESADOS_VINCULACION.pdf'

        );

        $avisos_tecnica =array(
            'Departamento de Gestión Academica (Instructores)' => 'avisos_privacidad/integral/AVISO_INTEGRAL_TECNICA_ACADEMICA_VALIDACIÓN_DEL_PERSONAL_TECNICA_ACADEMICA.pdf',
            'Departamento de Certificación y Control' => 'avisos_privacidad/integral/AVISO_INTEGRAL_TECNICA_A_CONTROL_ESCOLAR_TECNICA_A..pdf',
            
        );

        $avisos_comisaria =array(
            'Comisaria Pública' => 'avisos_privacidad/integral/INTEGRAL_COMISARIA.pdf'
        );

        $avisos_simplificados =array(
            'ICATECH' => 'avisos_privacidad/simplificado/AVISO_SMPLIFICADO_ICATECH.pdf',
            'Dirección General' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_DIRECCION_G..pdf'
        );

        $simplificados_ejecutiva =array(
            'Area de Infórmatica' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_INFORMATICA.pdf',
        );

        $simplificados_juridico =array(
            'Unidad Juridica' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_JURIDICO.pdf',
            'Unidad de Transparencia (Derecho ARCO)' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_ARCO_TRANSP.pdf',
            'Unidad de Transparencia' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_SOLICITUDES_TRANSP.pdf'
        );

        $simplificados_administrativa =array(
            'Departamento de Recursos Financieros (CDFI)' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_FINANCIERO.pdf',
            'Departamento de Recursos Humanos (Nomina)' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_RH_NOMINA_DE_PAGO.pdf',            
            'Departamento de Recursos Humanos (Expediente Unico del Personal)' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_RH_EXPE_U.P.pdf',            
            'Departamento de Recursos Humanos (Sistema de Registro de Asistencia)' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_RH_REGISTRO_DE_ASISTENCIA.pdf',            
            'Departamento de Recursos Materiales (Proveedores)' => 'avisos_privacidad/simplificado/MATERIALES_AVISO_SIMPLI_REGISTRO_DE_PROVEEDORES.pdf',            
            'Departamento de Recursos Materiales (Resguardos)' => 'avisos_privacidad/simplificado/MATERIALES_AVISO_SIMPLI_RESGUARDO_MOBILIARIO.pdf',            
            'Departamento de Recursos Materiales (Registro de Visitas)' => 'avisos_privacidad/simplificado/MATERIALES_AVISO_SIMPLI_REGISTRO_DE_VISITANTES.pdf'
        );
        
        $simplificados_planeacion =array(
            'Dirección de Planeación' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_PLANEACION.pdf'
        );

        $simplificados_vinculacion =array(
            'Dirección de Vinculacion' => '',
            'Direccion de Vinculación con el Sector Productivo' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_VINC._CONVENIOS_SEC_PROD.pdf',
            'Dirección de Vinculación Seguimiento a Egresados' => 'avisos_privacidad/simplificado/AVISO_SIMPLI_VINC.seguimiento_egresados_SEC_PROD.pdf'

        );

        $simplificados_academica =array(
            'Departamento de Gestión Academica (Instructores)' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_TECNICA_ACADEMICA_VALIDACIÓN_DEL_PERSONAL_TECNICA_ACADEMICA.pdf',
            'Departamento de Certificación y Control' => 'avisos_privacidad/simplificado/AVISO_SIMPLIFICADO_TECNICA_ACADEMICACONTROL_ESCOLAR_TECNICA_A..pdf'
        );

        $simplificados_comisaria =array(
            'Comisaria Pública' => 'avisos_privacidad/simplificado/SIMPLI_COMISARIA.pdf'
        );

        

        return view('pages.avisosprivacidad', ['avis_inte' =>$avisos_integrales, 'unejec' => $avisos_ejecutiva, 'unjuri' => $avisos_juridico, 'diradm' => $avisos_administrativa,
        'dirplan' => $avisos_planeacion, 'dirvincula' => $avisos_vinculacion, 'dirtacad' => $avisos_tecnica, 'comi' => $avisos_comisaria, 'avis_simpl' => $avisos_simplificados, 'simejec' => $simplificados_ejecutiva, 'simjuri' => $simplificados_juridico, 'simadmi' => $simplificados_administrativa,
        'simplan' => $simplificados_planeacion, 'simvincu' => $simplificados_vinculacion, 'simacad' => $simplificados_academica, 'simcomi' =>$simplificados_comisaria]);
    }

    public function Integridad()
    {
        $conduc_codigos =array(
            'Codigo de Conducta ICATECH' => 'codigos_conducta/códigodeconductaicatech.pdf', 
        );

        $honesti_codigos =array(
            'Codigo de Honestidad y Etica de los Servidores Públicos de la Administración Pública del Estado de Chiapas ' => 'codigos_conducta/codigodeetica.pdf',
        );

        $acuerdos_codigo =array(
            'Acuerdos' => 'codigos_conducta/acuerdo-limpio.pdf',
        );

        $directorio_codigo =array(
            'DIRECTORIO COMITÉ DE ÉTICA Y DE PREVENCIÓN DE CONFLICTO DE INTERÉS' => 'codigos_conducta/directorio.pdf',
        );

        $plandetrabajo_codigo =array(
            'Plan de Trabajo Anual 2019'=> 'codigos_conducta/plan-de-trabajo-anual.pdf',
        );
       
        return view('pages.Integridad', ['codigos1' =>$conduc_codigos, 'honestidad' =>$honesti_codigos, 'acuerdos' =>$acuerdos_codigo, 'directorios' =>$directorio_codigo, 'plantrabajo' =>$plandetrabajo_codigo]);
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
}
