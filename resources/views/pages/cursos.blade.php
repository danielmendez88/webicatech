@extends('theme.main.index')
@section('title', 'Lista de cursos de | Icatech')

@section('csscontent')
<style>
    .box{
        margin: 20px auto;
        width: 100%;
        height: 50px;
    }
    .container-1{
        width: 360px;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
    }
    .container-1 input#search{
        width: 360px;
        height: 50px;
        background: #FFF;
        border: none;
        font-size: 10pt;
        font-style: italic;
        font-weight: bold;
        float: left;
        color: #63717f;
        padding-left: 45px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 1px solid #63717f;

        -webkit-transition: background .55s ease;
        -moz-transition: background .55s ease;
        -ms-transition: background .55s ease;
        -o-transition: background .55s ease;
        transition: background .55s ease;
    }
    .container-1  .icon{
        position: absolute;
        top: 50%;
        margin-left: 17px;
        margin-top: 17px;
        z-index: 1;
        color: #4f5b66;
    }
    .container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
        outline:none;
        background: #ffffff;
    }
    .resultadosBusqueda{
        display: none;
    }
</style>
@endsection

@section('contenido')
    <div class="container g-pt-25">
        <br>
        {{-- include social media --}}
        @include('theme.main.media')
        {{-- include social media END --}}
        <div class="row">
            <div class="col-md-12">
                {{-- busqueda --}}
                <div class="box">
                        <div class="container-1">
                            <a href="javascript:;" class="icon" onclick="searchBox()">
                                <i class="fa fa-search"></i>
                            </a>
                            <input type="text" id="search" name="busqueda" placeholder="Buscar..." autocomplete="off"/>
                        </div>
                </div>
                {{-- busqueda END --}}
            </div>
        </div>
        <div class="masonry-grid row g-mb-0 row-eq-height s resultadosBusqueda" id="resultadosBusqueda"></div>
        <div class="masonry-grid row g-mb-0 row-eq-height s" id="resultados">
            @foreach ($cursos as $item)
                <div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">
                    <div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">
                        <p>
                            <strong> Curso: </strong> {{ $item->curso }}
                        </p>
                        <p>
                            <strong>Especialidad:</strong> {{ $item->especialidad }}
                        </p>
                        <p>
                                <strong>Objetivo: </strong> {{ $item->objetivo }}
                        </p>
                        <p>
                                <strong>Perfil: </strong>  {{ $item->perfilIngreso }}
                        </p>
                        <p>
                            <strong>Duración: </strong> {{ $item->duracion }} Horas
                        </p>
                        
                    
                        <p>
                            <strong>Clasificacion: </strong> {{ $item->clasificacion }}
                        </p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>  
@stop
@section('contentScriptJs')
    <script>
        /**@argument
        * variable local que sólo funcione en un bloque que fue declarado
        */
        let searchBox = () => {
            let inputBusqueda = document.getElementById('search').value;
            if (inputBusqueda.length >= 1) {
                var busqueda = $('#search').val();
                var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
                var data={busqueda:busqueda};
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': token},
                    type: "get",
                    url: "{{ route('buscadorBy') }}", 
                    dataType: 'json',
                    data: data,
                    success: function (msg){
                        var resultados = document.getElementById("resultadosBusqueda");
                        var x = document.getElementById('resultados');
                        x.style.display = "none";
                        let capa = '';
                        for (let index = 0; index < msg.length; index++) {
                            capa += '<div class="masonry-grid-item col-sm-6 col-md-6 col-lg-12">' +
                                '<div class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-10 g-pt-20 g-bg-secondary">' +
                                        '<p>'+
                                            '<strong> Curso: </strong> '+msg[index]['curso'] +''+
                                        '</p>' +
                                        '<p>' +
                                            '<strong>Especialidad:</strong> '+msg[index]['especialidad']+'' +                                        '</p>' +
                                        '<p>' +
                                            '<strong>Objetivo: </strong>'+ msg[index]['objetivo'] +
                                        '</p>' +
                                        '<p>' +
                                            '<strong>Perfil: </strong>' + msg[index]['perfilIngreso'] +
                                        '</p>' +
                                        '<p>' +
                                            '<strong>Duración: </strong>' + msg[index]['duracion'] +
                                        '</p>' +
                                        '<p>' +
                                            '<strong>Clasificacion: </strong>' + msg[index]['clasificacion'] +
                                        '</p>' +
                                    '</div>' +
                                '</div>';
                        }
                        resultados.innerHTML = capa;
                        resultados.style.display = "block";
                    }
                });
            } else {
                var x = document.getElementById('resultados');
                x.style.display = "block";
                var resultados = document.getElementById("resultadosBusqueda");
                resultados.style.display = "none";
                resultados.innerHTML="";
            }
        } 
    </script>
@endsection