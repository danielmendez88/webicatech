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
        $inf_financiera20 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/pt2020/financiera/bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/pt2020/financiera/formatos_de_analisis.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/pt2020/financiera/formatos_armonizados.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/pt2020/financiera/formatos_ley_de_transparencia.pdf'
        );
        $inf_presupuestal20 = array(
            'Información Presupuestaria' => 'cuenta_publica/pt2020/presupuestal/pptal1er2020.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/pt2020/presupuestal/afuncional1er2020.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/pt2020/presupuestal/conac1er2020.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/pt2020/presupuestal/ldf1er2020.pdf'
        );
        $inf_financiera2t20 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/st2020/financiera/bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/st2020/financiera/formatos_analisis.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/st2020/financiera/formatos_armonisados_conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/st2020/financiera/formatos_ley_transparencia.pdf'
        );
        $inf_presupuestal2t20 = array(
            'Información Presupuestaria' => 'cuenta_publica/st2020/presupuestal/pptal2t2020.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/st2020/presupuestal/funcional2t2020.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/st2020/presupuestal/conac2t2020.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/st2020/presupuestal/ldf2t2020.pdf'
        );
        $inf_financiera3t20 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/tt2020/financiera/1bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/tt2020/financiera/1formatos_complementarios.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/tt2020/financiera/1formatos_armonizados_conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/tt2020/financiera/1formatos_ley_de_disciplina_financiera.pdf'
        );
        $inf_presupuestal3t20 = array(
            'Información Presupuestaria' => 'cuenta_publica/tt2020/presupuestal/1pptal3er2020.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/tt2020/presupuestal/1funcional3er2020.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/tt2020/presupuestal/1conac3er2020.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/tt2020/presupuestal/1ldf3er2020.pdf'
        );
        $inf_financiera4t20 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/ct2020/financiera/bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/ct2020/financiera/formatos_complementarios.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/ct2020/financiera/formatos_armonizados_conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/ct2020/financiera/formatos_ley_de_disciplina_financiera.pdf'
            
        );
        $inf_presupuestal4t20 = array(
            'Información Presupuestaria' => 'cuenta_publica/ct2020/presupuestal/informacionppt4t2020.pdf'            
        );
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
            'Bienes Patrimoniales' => 'cuenta_publica/tt2019/financiera/bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/tt2019/financiera/formatos_de_analisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/tt2019/financiera/formatos_armonizadosconac.pdf',
            'Formatos Ley de Disciplina Financiera' =>'cuenta_publica/tt2019/financiera/formatos_ley_de_disciplina_financiera.pdf'
        );
        $inf_presupuestal3 = array(
            'Información Presupuestaria' => 'cuenta_publica/tt2019/presupuestal/pptal.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/tt2019/presupuestal/analisisfuncional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/tt2019/presupuestal/conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/tt2019/presupuestal/ldf.pdf'
        );

        $inf_financiera4 = array(
            'Bienes Patrimoniales' => 'cuenta_publica/ct2019/financiera/bienes_patrimoniales.pdf',
            'Formatos de Analisis' => 'cuenta_publica/ct2019/financiera/formatos_de_analisis.pdf',
            'Formatos Armonizados Conac' =>'cuenta_publica/ct2019/financiera/armonizados_conac.pdf',
            'Formatos Ley de Disciplina Financiera' =>'cuenta_publica/ct2019/financiera/ley_disciplina_financiera.pdf'
        );
        $inf_presupuestal4 = array(
            'Información Presupuestaria' => 'cuenta_publica/ct2019/presupuestal/informacion_presupuestaria.pdf',
            'Formato Analisis Funcional' => 'cuenta_publica/ct2019/presupuestal/analisis_funcional.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/ct2019/presupuestal/formatos_armonizados_conac.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/ct2019/presupuestal/formatos_LDF.pdf'
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

        $inf_disciplina1t21 =array(
            'Clasificación por objeto del gasto, Capitulo y Concepto ESC' => 'cuenta_publica/ley_disciplinafinanciera2021/1t2021/LDF6aClasificaciOnporObjetodelGastoCapituloyConceptoEsc.pdf',
            'Clasificación Administrativa ESC' => 'cuenta_publica/ley_disciplinafinanciera2021/1t2021/LDF6bClasificaciOnAdministrativaEsc.pdf',
            'Clasificación Funcional, Finalidad y Función ESC' => 'cuenta_publica/ley_disciplinafinanciera2021/1t2021/LDF6cClasificaciOnFuncionalFinalidadyFunciónEsc.pdf',
            'Clasificación de Servicios Personales por Categorias ESC' => 'cuenta_publica/ley_disciplinafinanciera2021/1t2021/LDF6dClasificaciOndeServiciosPersonalesporCategorIaEsc.pdf',
            'Formatos LDF' => 'cuenta_publica/ley_disciplinafinanciera2021/1t2021/FormatosLDF6a-6b-6c-6d1erTrimestre.pdf'
        );
        $inf_disciplina2t21 =array(
            'Formatos LDF' => 'cuenta_publica/ley_disciplinafinanciera2021/2t2021/formatosLDF6a-6b-6c-6d2otrimestre.pdf'
        );
        $inf_disciplina3t21 =array(
            'Formatos LDF' => 'cuenta_publica/ley_disciplinafinanciera2021/3t2021/FormatosLDF6a-6b-6c-6d3erTrimestre.pdf'
        );
        $inf_financiera1t21 =array(
            'Bienes Patrimoniales' => 'cuenta_publica/pt2021/financiera/bienes_patrimoniales1.pdf',
            'Formatos Complementarios' => 'cuenta_publica/pt2021/financiera/formatos_complementarios1.pdf',
            'Clasificación Funcional, Finalidad y Función ESC' => 'cuenta_publica/pt2021/financiera/formatos_armonizados_CONAC.pdf',
            'Clasificación de Servicios Personales por Categorias ESC' => 'cuenta_publica/pt2021/financiera/formatos_ley_de_disciplina_financiera1.pdf'
        );
        $inf_presupuestal1t21 =array(
            'Analisis Funcional' => 'cuenta_publica/pt2021/presupuestal/analisis_funciona1ertrimestre2021.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/pt2021/presupuestal/formatosarmonizadosconac1ertrimestre2021.pdf',
            'Información Presupuestal' => 'cuenta_publica/pt2021/presupuestal/Informacion_pptal1ertrimestre2021.pdf'
        );
        $inf_presupuestal2t21 =array(
            'Formatos Armonizados Conac ' => 'cuenta_publica/st2021/presupuestal/formatosCONAC7y132o.trimestre2021.pdf'
        );
        $inf_financiera2t21 =array(
            'Bienes Patrimoniales' => 'cuenta_publica/st2021/financiera/BIENES_PATRIMONIALES.pdf',
            'Formatos Armonizados Conac' => 'cuenta_publica/st2021/financiera/FORMATOS_ARMONIZADOS_CONAC.pdf',
            'Formatos Complementarios' => 'cuenta_publica/st2021/financiera/FORMATOS_COMPLEMENTARIOS.pdf',
            'Formatos Ley de Disciplina Financiera' => 'cuenta_publica/st2021/financiera/FORMATOS_LEY_DE_DISCIPLINA_FINANCIERA.pdf'
        );

        return view('pages.cuentapublica', ['financ2t21'=> $inf_financiera2t21, 'presu2t21'=> $inf_presupuestal2t21,'finan1t21'=> $inf_financiera1t21, 'presu1t21'=> $inf_presupuestal1t21, 'disci3t21' => $inf_disciplina3t21,'disci1t21'=> $inf_disciplina1t21, 'disci2t21'=> $inf_disciplina2t21, 'infin1t20'=> $inf_financiera20, 'infpre1t20'=> $inf_presupuestal20, 'infin2t20'=> $inf_financiera2t20, 'infpre2t20'=> $inf_presupuestal2t20, 'infin3t20'=> $inf_financiera3t20, 'infpre3t20'=> $inf_presupuestal3t20, 'infFin'=> $inf_financiera, 'infPre'=>$inf_presupuestal,'infFin2'=>$inf_financiera2, 'infPre2'=> $inf_presupuestal2, 'infFin3'=> $inf_financiera3, 'infPre3'=> $inf_presupuestal3,
        'infFin4'=>$inf_financiera4,'infPre4'=>$inf_presupuestal4,'inffin18'=> $inf_financiera18, 'infpres18'=> $inf_presupuestal18, 'inffin182t'=> $inf_financiera182t, 'infpres182t'=> $inf_presupuestal182t, 'inffint183t'=> $inf_financiera183t, 'infpres183t'=> $inf_presupuestal183t,
        'inffin184t'=> $inf_financiera184t, 'infpres184t'=> $inf_presupuestal184t, 'inffinan4t'=> $inf_financiera4t20, 'infpresu4t'=> $inf_presupuestal4t20]);


    }

    public function normatividad()
    {
        $dec_decretos = array(
            'Decreto de Creación' => 'normatividad_/decretos/decreto-de-creacion.pdf',
            'Decreto Modificatorio' => 'normatividad_/decretos/decreto-modificatorio.pdf'
        );

        $reg_reglamentos = array(
            'Reglamento Interior 2018' => 'normatividad_/reglamentos/reglamento_interno2018.pdf'
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
        $diario_oficialicatech =array(
            'Diario Oficial "ICATECH"'=> 'normatividad_/reglamentos/decreto_lineamientos_icatech.pdf'
        );


        return view('pages.normatividad', ['deccrea'=> $dec_decretos, 'manual_lineamientos'=> $diario_oficialicatech, 'reglam'=> $reg_reglamentos, 'manual'=> $man_induccion,
        'manualproc'=> $manu_procedimientos, 'manualorga'=> $manu_organizacion,]);

    }

    public function licitaciones()
    {               
        $lic_federal_apertura = array(
            '- ACTA DE APERTURA DE PROPUESTAS TECNICAS Y ECONOMICAS' => 'licitaciones_/federal/ACTA_APERTURA_PROPUESTAS.pdf',
            '- ACTA DE FALLO' => 'licitaciones_/federal/FALLO_ICTP-001-2021_2DO.PROCEDIMIENTO .pdf'
        );

        $lic_convocatoria = array(
            ' PRESENCIAL ICATECH-LPN/001/2021 (TIEMPOS RECORTADOS)' => 'licitaciones_/federal/ICATECH-LPN0012021.pdf',
            ' PRESENCIAL ICATECH-LPN/001/2021 (TIEMPOS RECORTADOS) COMPRANET LA-907081961-E3-2021' => 'licitaciones_/federal/aclaracion_de_dudas_LPN_001_2021.pdf',
            ' ACTA DE APERTURA DE PROPUESTAS TÉCNICAS Y ECONÓMICAS, ICATECH-LPN/001/2021 (TIEMPOS RECORTADOS), COMPRANET LA-907081961-E3-2021' => 'licitaciones_/federal/acta_de_apertura_lpn.pdf',
            ' ACTA DE FALLO' => 'licitaciones_/federal/acta_de_fallo_presencial.pdf'
        );

        $lic_federal_presencial = array(
            '- EVENTO DE PRESENTACIÓN Y APERTURA DE PROPUESTAS DE LA INVITACIÓN A CUANDO MENOS TRES PERSONAS, NACIONAL, PRESENCIAL, ICATECH-ICTP/002/2021' => 'licitaciones_/federal/acta_apertura_presentacion_apertura_propuestas.pdf',  
            '- ACTA DE FALLO' => 'licitaciones_/federal/ACTA_DE_FALLO_TINTAS.pdf'          
        );
        $lic_caasicatech_presencial = array(
            '- Invitacion a Cuando Menos Tres Personas, Nacional, Presencial, ICATECH/ICTP/003/2021 COMPRANET IA-907081961-E5-2021' => 'licitaciones_/federal/actade_apertura_de_propuestas_tecnicas.pdf'                     
        );
        

        return view('pages.licitaciones', ['IA907081961' => $lic_caasicatech_presencial, 'acfallo' => $lic_federal_apertura, 'convocatorias_' => $lic_convocatoria, 'ictp002' => $lic_federal_presencial]);
    }

    public function sevac()
    {
        $prim_trimestre2020 =array(
            'Estado Analitico de Deuda y de Otros Pasivos' => 'sevac_/2020/1t/estado_analitico_de_deuda_otros_pasivos.pdf',
            'Estado Analitico del Activo' => 'sevac_/2020/1t/estado_analitico_del_activo.pdf',
            'Estado de Actividades' => 'sevac_/2020/1t/estado_de_actividades.pdf',
            'Estado de Cambios en Situación Financiera' => 'sevac_/2020/1t/estado_de_cambios_en_situacion_financiera.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2020/1t/estado_de_flujos_de_efectivo.pdf',
            'Estado de Situación Financiera' => 'sevac_/2020/1t/estado_de_situacion_financiera.pdf',
            'Estado de Variación de Hacienda Pública' => 'sevac_/2020/1t/estado_de_variacion_de_hacienda_publica.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2020/1t/informe_sobre_pasivos_contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2020/1t/notas_a_los_estados_financieros.pdf',
            'Relación de Cuentas Bancarias Productivas Especificas' => 'sevac_/2020/1t/relacion_de_cuentas_bancarias_productivas_especificas.pdf',
            'Programas y Proyectos de Inversion' => 'sevac_/2020/1t/programas_y_proyectos_de_inversion.pdf',
            'Indicadores de Resultados' => 'sevac_/2020/1t/indicadores_de_resultados.pdf',
            'Gasto por Categoria Programatica' => 'sevac_/2020/1t/gasto_por_categoria_programatica.pdf',
            'Estado Analitico con Clasificación Funcional' => 'sevac_/2020/1t/estado_analitico_con_clasific_funcional.pdf',
            'Estado Analitico con Clasificación por Objeto del Gasto' => 'sevac_/2020/1t/estado_analitico_con_clasificacion_por_objeto_del_gasto.pdf',
            'Estado Analitico con Clasificación Economica por tipo de Gasto' => 'sevac_/2020/1t/estado_analitico_con_clasificacion_economica_por_tipo_de_gasto.pdf',
            'Estado Analitico por Clasificación Administrativa' => 'sevac_/2020/1t/estado_analitico_por_clasificacion_administrativa.pdf',
            'Endeudamiento Neto' => 'sevac_/2020/1t/endeudamiento_neto.pdf',
            'Estado Analitico de los Ingresos' => 'sevac_/2020/1t/estado_analitico_de_los_ingresos.pdf',
            'Formato del Ejercicio y Destino de Gasto Federalizado y Reintegros' => 'sevac_/2020/1t/formato_del_ejercicio_y_destino_de_gasto_federalizado_y_reintegros.pdf',
            'Intereses de la Deuda' => 'sevac_/2020/1t/intereses_de_la_deuda.pdf',
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2020/1t/monto_pagados_por_ayudas_y_subsidios.pdf'


        );

        $segun_trimestre2020 =array(
            'Estado Analitico de Deuda y de Otros Pasivos' => 'sevac_/2020/2t/estado_analitico_de_la_deuda_y_otros_pasivos.pdf',
            'Estado Analitico del Activo por Rubros' => 'sevac_/2020/2t/estado_analitico_del_activo_por_rubros.pdf',
            'Estado de Actividades por Rubros' => 'sevac_/2020/2t/estado_de_actividades_por_rubros.pdf',
            'Estado de Cambios en Situación Financiera' => 'sevac_/2020/2t/estado_de_cambios_en_la_situacion_financiera.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2020/2t/estado_de_flujo_de_efectivo.pdf',
            'Estado de Situación Financiera por Rubros' => 'sevac_/2020/2t/estado_de_situacion_financiera_por_rubros.pdf',
            'Estado de Variación en la Hacienda Pública' => 'sevac_/2020/2t/estado_de_variacion_en_la_hacienda_publica.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2020/2t/informe_sobre_pasivos_contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2020/2t/notas_a_los_estados_financieros.pdf',
            'Estado Analitico con Clasificación Funcional' => 'sevac_/2020/2t/estado_analitico_con_clasific_funcional.pdf',
            'Estado Analitico por Clasificación Administrativa' => 'sevac_/2020/2t/estado_analitico_por_clasificacion_administrativa.pdf',
            'Estado Analitico con Clasificación Economica por Tipo de Gasto ' => 'sevac_/2020/2t/estado_analitico_con_clasificacion_economica_por_tipo_de_gasto.pdf',
            'Estado Analitico con Clasificación por Objeto del Gasto' => 'sevac_/2020/2t/estado_analitico_con_clasificacion_por_objeto_del_gasto.pdf',
            'Gasto por Categoria Programatica' => 'sevac_/2020/2t/gto_por_categoria_programatica.pdf',
            'Indicadores de Resultados' => 'sevac_/2020/2t/indicadores_de_resultados.pdf',
            'Programas y Proyectos de Inversión' => 'sevac_/2020/2t/programas_y_proyectos_de_inversion.pdf',
            'Endeudamiento Neto' => 'sevac_/2020/2t/endeudamiento_neto.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2020/2t/estado_analitico_de_ingresos.pdf',
            'Formato del Ejercicio y Destino de Gasto Federalizado y Reintegros' => 'sevac_/2020/2t/formato_del_ejercicio_y_destino_de_gasto_federalizado_y_reintegros.pdf',
            'Intereses de la Deuda' => 'sevac_/2020/2t/intereses_de_la_deuda.pdf',
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2020/2t/montos_pagados_por_ayudas_y_subsidios.pdf'


        );

        $tercer_trimestre2020 =array(
            'Estado Analitico de Deuda y de Otros Pasivos' => 'sevac_/2020/3t/estado_analitico_de_deuda_otros_pasivos.pdf',
            'Estado Analitico del Activo por Rubros' => 'sevac_/2020/3t/estado_analitico_del_activo_por_rubros.pdf',
            'Estado de Actividades por Rubros' => 'sevac_/2020/3t/estado_de_actividades_por_rubros.pdf',
            'Estado de Cambios en Situación Financiera' => 'sevac_/2020/3t/estado_de_cambios_en_situacion_financiera_por_rubros.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2020/3t/estado_de_flujo_de_efectivo_por_rubros.pdf',
            'Estado de Situación Financiera por Rubros' => 'sevac_/2020/3t/estado_de_situacion_financiera_por_rubros.pdf',
            'Estado de Variación en la Hacienda Pública' => 'sevac_/2020/3t/estado_de_variacion_en_hacienda_publica.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2020/3t/informe_sobre_pasivos_contigentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2020/3t/notas_a_estados_financieros_.pdf',            
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2020/3t/montos_pagados_por_ayudas_y_subsidios.pdf'
            

        );

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

        $cuar_trimestre =array(
            'Estado Analitico de la deuda y otros pasivos' => 'sevac_/2019/tt4/estado_analatico_deuda_y_pasivos.PDF',
            'Estado Analitico del Activo' => 'sevac_/2019/tt4/edo_analitico_del_activo.PDF',
            'Estado de Actividades'  => 'sevac_/2019/tt4/estado_de_actividades.PDF',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2019/tt4/edo_cambios_en_situacion_financiera.PDF',
            'Estado de Flujos de Efectivo' => 'sevac_/2019/tt4/edo_flujos_de_efectivo.PDF',
            'Estado de Situación Financiera' => 'sevac_/2019/tt4/edo_situacion_financiera.PDF',
            'Estado de Variación de la Hacienda Pública' => 'sevac_/2019/tt4/edo_variacion_hacienda_publica.PDF',
            'Informe sobre Pasivos Contingentes' => 'sevac_/2019/tt4/informes_pasivos_contingentes.PDF',
            'Notas a los Estados Financieros' => 'sevac_/2019/tt4/notas_edos_financieros.PDF',
            'Relación de Cuentas Bancarias Productivos Espesificas' => 'sevac_/2019/tt4/relacion_ctas_bancarias_prods_esps.pdf'
        );

        /*  $cuar_trimestre =array(
            'Analisis de las Principales Variaciones y Adecuaciones al Presupuesto' => 'sevac_/2019/t4/Analisis_de_las_Principales_Variac_y_Adec_del_Ppto.pdf',
            'Analisis de los Recursos Federales Etiquetados por Financiamientos' => 'sevac_/2019/t4/Analisis_de_los_recursos_federales_por_fte_de_financiamiento.pdf',
            'Aplicación del Presupuesto Total por Rubros'  => 'sevac_/2019/t4/Aplicacion_del_presupuesto_Total_por_Rubros.pdf',
            'Cierre Anual 2019'  => 'sevac_/2019/t4/Cierre_Anual_2019.pdf',
            'Comparativo de Analisis del Presupuesto por Objeto del Gasto'  => 'sevac_/2019/t4/ComparativoAnalisis_del_Ppto_por_Objeto_del_Gasto.pdf',
            'Endeudamiento Neto'  => 'sevac_/2019/t4/endeudamiento_neto.pdf',
            'Analitico de Partidas por Clasificacion Administrativa'  => 'sevac_/2019/t4/EP-01_Analitico_de_Partidas_por_Clasificacion_Administrativa.pdf',
            'Ingresos Estatales'  => 'sevac_/2019/t4/EP-1A01_Ingresos_Estatales.pdf',
            'Por Capitulos Concepto por Partidas Generica y Especifica'  => 'sevac_/2019/t4/EP-03_por_Capitulos_Partida_Generica_y_Partida_Especifica.pdf',
            'Resumen Tipo de Gasto y Partida'  => 'sevac_/2019/t4/EP-08_Resumen_Tipo_de_Gasto_y_Partida.pdf',
            'Fondo General de Participaciones' => 'sevac_/2019/t4/EP-5811_Fondo_General_de_Participaciones.pdf',
            'Impuesto a la Venta Final de Gasolina y Diesel' => 'sevac_/2019/t4/EP-5817_Impuesto_a_la_Venta_Final_de_Gasolina_y_Diesel.pdf',
            'Otros Recursos ISR Participable Estatal' => 'sevac_/2019/t4/EP-5818_Otros_Recursos_ISR_Participable_Estatal.pdf',
            'Otros Subsidios' => 'sevac_/2019/t4/EP-5932_Otros_Subsidios.pdf',
            'Estado Analitico de Ingresos' => 'sevac_/2019/t4/estado_analitico_ingresos.pdf',
            'Formato del Ejercicio y Destino de Gasto Federalizado y Reintegros' => 'sevac_/2019/t4/Formato_del_Ejercicio_y_Destino_de_Gasto_Federalizado_y_Reintegros.pdf',
            'Guia de Cumplimiento de la LDF' => 'sevac_/2019/t4/GuiadeCumplimientodelaLDF.pdf',
            'Intereses de la Deuda' => 'sevac_/2019/t4/Intereses_de_la_Deuda.pdf',
            'Clasificacion por Objeto del Gasto' => 'sevac_/2019/t4/LDF_6a_Clasificacion_por_Objeto_del_Gasto_Capitulos_y_Conceptos.pdf',
            'Clasificacion Administrativa' => 'sevac_/2019/t4/LDF_6b_Clasificacion_Administrativa.pdf',
            'Clasificacion Funcional' => 'sevac_/2019/t4/LDF_6c_Clasificacion_Funcional_Finalidad_y_Funcion.pdf',
            'Clasificacion de Servicios Personales por Categoria' => 'sevac_/2019/t4/LDF_6d_Clasificación_de_Servicios_Personales_por_Categoria.pdf',
            'Programas y Proyectos de Inversion' => 'sevac_/2019/t4/Programas_y_Proyectos_de_Inversion.pdf',
            'Clasificacion Objeto Gasto' => 'sevac_/2019/t4/RPA_1_Clasificacion_Objeto_Gasto_Capitulos_Conceptos.pdf',
            'Clasificacion Economica Tipo Gasto' => 'sevac_/2019/t4/RPA_2_Clasificacion_Economica_Tipo__Gasto.pdf',
            'Clasificacion Administrativa Organismo' => 'sevac_/2019/t4/RPA_3_Clasificacion_Administrativa_Organismo.pdf',
            'Clasificacion Administrativa Poderes' => 'sevac_/2019/t4/RPA_4_Clasificacion_Administrativa_Poderes.pdf',
            'Clasificacion Administrativa Entidades' => 'sevac_/2019/t4/RPA_5_Clasificacion_Administrativa_Entidades.pdf',
            'Clasificacion Funcional Funcion' => 'sevac_/2019/t4/RPA_6_Clasificacion_Funcional_Finalidad_Funcion.pdf',
            'Gasto por Categoria Programatica' => 'sevac_/2019/t4/RPA_7_Gasto_por_Categoria_Programatica.pdf'


        );*/


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
        $cuarto_trimestre2020 =array(
            'Estado de Situación Financiera' => 'sevac_/2020/4t/1estado_de_situacion_financiera_por_rubros.pdf',
            'Estado de Actividades' => 'sevac_/2020/4t/2estado_de_actividades_por_rubros.pdf',
            'Estado de Variacion en la Hacienda Pública' => 'sevac_/2020/4t/3estado_de_variacion_en_la_hacienda_publica_por_rubros.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2020/4t/4estado_de_cambios_en_la_situacion_financiera_por_rubros.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2020/4t/5estado_de_flujos_de_efectivo_por_rubros.pdf',
            'Estado Analitico del Activo' => 'sevac_/2020/4t/6estado_analitico_del_activo_por_rubros.pdf',
            'Estado Analitico de la Deuda y Otros Pasivos' => 'sevac_/2020/4t/7estado_analitico_de_la_deuda_y_otros_pasivos_por_rubros.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2020/4t/8informe_sobre_pasivos_contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2020/4t/9notas_a_los_estados_financieros.pdf',
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2020/4t/10montos_pagados_por_ayudas_y_subsidios.pdf'
        );
        $primer_trimestre2021 =array(
            'Estado de Situación Financiera' => 'sevac_/2021/1t/1_estado_de_situacion_flnanciera_por_rubros.pdf',
            'Estado de Actividades' => 'sevac_/2021/1t/2_estado_de_actividades_por_rubros.pdf',
            'Estado de Variacion en la Hacienda Pública' => 'sevac_/2021/1t/3_estado_de_variacion_en_la_hacienda_publica_por_rubros.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2021/1t/4_estado_de_cambios_en_la_situacion_financiera_por_rubros.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2021/1t/5_estado_de_flujos_de_efectivo_por_rubros.pdf',
            'Estado Analitico del Activo' => 'sevac_/2021/1t/6_estado_analitico_del_activo_por_rubros.pdf',
            'Estado Analitico de la Deuda y Otros Pasivos' => 'sevac_/2021/1t/7_estado_analitico_de_la_deuda_y_otros_pasivos_por_rubros.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2021/1t/8_informe_sobre_pasivos_contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2021/1t/9_notas_a_los_estados_financieros.pdf',
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2021/1t/10_montos_pagados_por_ayudas_y_subsidios.pdf'
        );
        $segundo_trimestre2021 =array(
            'Estado de Situación Financiera' => 'sevac_/2021/2t/1_estado_de_situacion_financiera.pdf',
            'Estado de Actividades' => 'sevac_/2021/2t/2_estado_de_actividades.pdf',
            'Estado de Variacion en la Hacienda Pública' => 'sevac_/2021/2t/3_estado_de_variacion_de_la_hacienda_publica.pdf',
            'Estado de Cambios en la Situación Financiera' => 'sevac_/2021/2t/4_estado_de_cambios_en_la_situacion_financiera.pdf',
            'Estado de Flujos de Efectivo' => 'sevac_/2021/2t/5_estado_de_flujo_de_efectivo.pdf',
            'Estado Analitico del Activo' => 'sevac_/2021/2t/6_estado_analitico_del_activo.pdf',
            'Estado Analitico de la Deuda y Otros Pasivos' => 'sevac_/2021/2t/7_estado_analitico_de_la_deuda_y_otros_pasivos.pdf',
            'Informe Sobre Pasivos Contingentes' => 'sevac_/2021/2t/8_informe_sobre_pasivos_contingentes.pdf',
            'Notas a los Estados Financieros' => 'sevac_/2021/2t/9_notas_a_los_estados_financieros.pdf',
            'Montos Pagados por Ayudas y Subsidios' => 'sevac_/2021/2t/10_montos_pagados_por_ayudas_y_subsidios.pdf'
        );


        return view('pages.sevac', ['seguntrim2021' => $segundo_trimestre2021, 'cuartotrim2020' => $cuarto_trimestre2020, 'primtrim2021' => $primer_trimestre2021, 'primtrim2020' => $prim_trimestre2020, 'segundtrim2020' => $segun_trimestre2020, 'tercertrim2020' => $tercer_trimestre2020, 'primtrim'=> $prim_trimestre, 'segtrim'=> $seg_trimestre, 'tertrim'=> $ter_trimestre, 'cuatrim'=> $cuar_trimestre, 'trim2018' => $prim_trimestre2018, 'segtrim2018' => $seg_trimestre2018, 'tertrim2018' => $terc_trimestre2018]);
        //comentario
    }



    public function avisosprivacidad()
    {

        $avisos_integrales2021 =array(
            'ICATECH' => 'avisos_privacidad/integral/1_ICATECH.pdf',
            'Dirección General' => 'avisos_privacidad/integral/2_DIRECCION_GENERAL.pdf',
            'Area de Infórmatica' => 'avisos_privacidad/integral/3_INFORMATICA.pdf',
            'Area de Mercadotecnia' => 'avisos_privacidad/integral/4_MERCADOTECNIA.pdf',
            'Unidad Juridica' => 'avisos_privacidad/integral/5_UNIDAD_JURIDICA.pdf',
            'Unidad de Transparencia (Derecho ARCO)' => 'avisos_privacidad/integral/6_UNIDAD_DE_TRANSPARENCIA_DERECHO_ARCO.pdf',
            'Unidad de Transparencia' => 'avisos_privacidad/integral/7_UNIDAD_DE_TRANSPARENCIA.pdf',
            'Departamento de Recursos Financieros (CDFI)' => 'avisos_privacidad/integral/8_RECURSOS_FINANCIEROS.pdf',
            'Departamento de Recursos Humanos (Nomina)' => 'avisos_privacidad/integral/9_RECURSOS_HUMANOS_NOMIDA.pdf',
            'Departamento de Recursos Humanos (Expediente Unico del Personal)' => 'avisos_privacidad/integral/10_RECURSOS_HUMANOS_EXPEDIENTE_UNICO_DE_PERSONAL.pdf',
            'Departamento de Recursos Humanos (Sistema de Registro de Asistencia)' => 'avisos_privacidad/integral/11_RECURSOS_HUMANOS_SISTEMA_DE_REGISTRO_DE_ASISTENCIA.pdf',
            'Departamento de Recursos Materiales (Proveedores)' => 'avisos_privacidad/integral/12_RECUROS_MATERIALES_PROVEEDORES.pdf',
            'Departamento de Recursos Materiales (Resguardos)' => 'avisos_privacidad/integral/13_RECURSOS_MATERIALES_RESGUARDOS.pdf',
            'Departamento de Recursos Materiales (Registro de Visitas)' => 'avisos_privacidad/integral/14_RECURSOS_MATERIALES_RESGISTRO_DE_VISITAS.pdf',
            'Departamento de Organizacion y Evaluacion' => 'avisos_privacidad/integral/15_DIRECCION_DE_PLANEACION.pdf',
            'Departamento de Vinculación Social y Empresarial' => 'avisos_privacidad/integral/16_DIRECCION_DE_VINCULACION.pdf',
            'Departamento de Vinculación para la Competitividad (firma de convenios)' => 'avisos_privacidad/integral/17_DIRECCION_DE_VINCULACION_CONVENIOS.pdf',
            'Departamento de Vinculación para la Competitividad (Seguimiento de Egresados)' => 'avisos_privacidad/integral/18-Aviso_de_Privacidad_Integral_Seguimiento_Egresados.pdf',
            'Departamento de Vinculación Gubernamental' => 'avisos_privacidad/integral/23-Departamento_de vinculación_gubernamental.pdf',
            'Departamento de Gestión Academica (Instructores)' => 'avisos_privacidad/integral/19_DIRECCION_TECNICA_ACADEMICA_INSTRUCTORES.pdf',
            'Departamento de Certificación y Control' => 'avisos_privacidad/integral/20_DIRECCION_TECNICA_ACADEMICA_CERTIFICACION_Y_CONTROL.pdf',
            'Comisaria Pública' => 'avisos_privacidad/integral/21_COMISARIA.pdf',
            'Imparticion de Cursos' => 'avisos_privacidad/integral/22_CURSOS.pdf'
        );            
       
        $avisos_simplificados2021 =array(
            'ICATECH' => 'avisos_privacidad/simplificado/1_ICATECH.pdf',
            'Dirección General' => 'avisos_privacidad/simplificado/2_DIRECCION_GENERAL.pdf',
            'Area de Infórmatica' => 'avisos_privacidad/simplificado/3_INFORMATICA.pdf',
            'Area de Mercadotecnia' => 'avisos_privacidad/simplificado/4_MERCADOTECNIA.pdf',
            'Unidad Juridica' => 'avisos_privacidad/simplificado/5_UNIDAD_JURIDICA.pdf',
            'Unidad de Transparencia (Derecho ARCO)' => 'avisos_privacidad/simplificado/6_UNIDAD_DE_TRANSPARENCIA_DERECHO_ARCO.pdf',
            'Unidad de Transparencia' => 'avisos_privacidad/simplificado/7_UNIDAD_DE_TRANSPARENCIA.pdf',
            'Departamento de Recursos Financieros (CDFI)' => 'avisos_privacidad/simplificado/8_RECURSOS_FINANCIEROS.pdf',
            'Departamento de Recursos Humanos (Nomina)' => 'avisos_privacidad/simplificado/9_RECURSOS_HUMANOS_NOMINA.pdf',
            'Departamento de Recursos Humanos (Expediente Unico del Personal)' => 'avisos_privacidad/simplificado/10_RECURSOS_HUMANOS_EXPEDIENTE_UNICO_DE_PERSONAL.pdf',
            'Departamento de Recursos Humanos (Sistema de Registro de Asistencia)' => 'avisos_privacidad/simplificado/11_RECURSOS_HUMANOS_SISTEMA_DE_REGISTRO_DE_ASISTENCIA.pdf',
            'Departamento de Recursos Materiales (Proveedores)' => 'avisos_privacidad/simplificado/12_RECURSOS_MATERIALES_PROVEEDORES.pdf',
            'Departamento de Recursos Materiales (Resguardos)' => 'avisos_privacidad/simplificado/13_RECURSOS_MATERIALES_RESGUARDO.pdf',
            'Departamento de Recursos Materiales (Registro de Visitas)' => 'avisos_privacidad/simplificado/14_RECURSOS_MATERIALES_REGISTRO_DE_VSITAS.pdf',
            'Departamento de Organizacion y Evaluacion' => 'avisos_privacidad/simplificado/15_DIRECCION_DE_PLANEACION.pdf',
            'Departamento de Vinculación Social y Empresarial' => 'avisos_privacidad/simplificado/16_DIRECCION_DE_VINCULACION.pdf',
            'Departamento de Vinculación para la Competitividad (firma de convenios)' => 'avisos_privacidad/simplificado/17_DIRECCION_DE_VINCULACION_CONVENIO.pdf',
            'Departamento de Vinculación para la Competitividad (Seguimiento de Egresados)' => 'avisos_privacidad/simplificado/18_aviso_simplificado_seguimiento_egresados.pdf',
            'Departamento de Vinculación Gubernamental' => 'avisos_privacidad/simplificado/23_AVISO_SIMPLIFICADO_GUBERNAMENTAL.pdf',
            'Departamento de Gestión Academica (Instructores)' => 'avisos_privacidad/simplificado/19 _DIRECCION_TECNICA_ACADEMICA_INSTRUCTORES.pdf',
            'Departamento de Certificación y Control' => 'avisos_privacidad/simplificado/20_DIRECCION_TECNICA_ACADEMICA_CERTIFICACION_Y_CONTROL.pdf',
            'Comisaria Pública' => 'avisos_privacidad/simplificado/21_COMISARIA.pdf',
            'Impartición de Cursos' => 'avisos_privacidad/simplificado/22_CURSOS.pdf'
        );

        
        return view('pages.avisosprivacidad', ['avisos_integrales' => $avisos_integrales2021, 'avisos_simplificados' => $avisos_simplificados2021]);
    }

    public function Integridad()
    {
        $conduc_codigos =array(
            'Codigo de Conducta ICATECH' => 'codigos_conducta/codigo_de_conducta.pdf',
        );

        $honesti_codigos =array(
            'Codigo de Honestidad y Etica de los Servidores Públicos de la Administración Pública del Estado de Chiapas ' => 'codigos_conducta/codigodeetica.pdf',
        );

        $acuerdos_codigo =array(
            'Acuerdos' => 'codigos_conducta/acuerdo-limpio.pdf',
        );

        $directorio_codigo =array(
            'DIRECTORIO COMITÉ DE ÉTICA Y DE PREVENCIÓN DE CONFLICTO DE INTERÉS' => 'codigos_conducta/directorio1.pdf',
        );

        $plandetrabajo_codigo =array(
            'Plan de Trabajo Anual 2019'=> 'codigos_conducta/plan-de-trabajo-anual.pdf',
        );

        $convocatorias_codigo =array(
            'Convocatorias 2020'=> 'codigos_conducta/convocatorias/convocatoria-consejeros.pdf',
        );

        $protocolodeatencion_codigo =array(
            'Protocolo de Atención de Quejas y Denuncias'=> 'codigos_conducta/protocolo-de-atencion-a-denuncias.pdf',
        );

        $informeanual_codigo = array(
            'Informe Anual de Actividades 2020'=> 'codigos_conducta/informe_anual2020.pdf',
        );

        $protocolo2_codigo = array(
            'Protocolo para la Prevención, Atención y Sanción del Hostigamiento Sexual y Acoso sexual.'=> 'codigos_conducta/protocolo.pdf',
        );
        $protocolo3_codigo = array(
            'Protocolo de Actuación de los Comités de Ética y de Prevención de Conflictos de Interés en la Atención de Presuntos Actos de Discriminación'=> 'codigos_conducta/protocolo_actuacion.pdf',
        );
        $directorioconse_codigo = array(
            'DIRECTORIO DEL CONSEJERO'=> 'codigos_conducta/directorio_consejeros.pdf',
        );
        $directorioasesores_codigo = array(
            'DIRECTORIO DE ASESORES'=> 'codigos_conducta/directorio_asesores.pdf',
        );

        return view('pages.Integridad', ['directorioasesor' => $directorioasesores_codigo,'directorioconsejero' => $directorioconse_codigo, 'protocoloprevencion' =>$protocolo2_codigo, 'protocoloactuacion' =>$protocolo3_codigo, 'codigos1' =>$conduc_codigos, 'honestidad' =>$honesti_codigos, 'acuerdos' =>$acuerdos_codigo, 'directorios' =>$directorio_codigo, 'plantrabajo' =>$plandetrabajo_codigo, 'convocatorias' =>$convocatorias_codigo, 'informe' => $informeanual_codigo, 'protocolo' =>$protocolodeatencion_codigo]);
    }
    public function planarchivo()
    {
        $plananual_codigo =array(
            'Plan Anual de Desarrollo Archivistico'=> 'plan_desarrollo/PADA2020_VERSION_PUB.pdf',
        );

        return view('pages.planarchivo', ['desarrollo' =>$plananual_codigo]);

    }

    public function transparencia()
    {
        $programactividades_codigo = array(
            'Informe del Plan Anual de Desarrollo Archivístico “PADA” 2020'=> 'archivtransparencia/INFORME_PADA_2020.pdf',
            'Plan Anual de Desarrollo Archivístico “PADA” 2021'=> 'archivtransparencia/INFORME_PADA_2021.pdf'
        );

        return view('pages.transparencia', ['informepada' =>$programactividades_codigo]);

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
