@extends("theme.lte.layout_news")
@section('title', 'Icatech | Agregar comunicado')

@section('content')
<section class="container g-py-40 g-pt-40 g-pb-0">
    <div class="col-sm-12">
        <div class="alert  alert-info alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-info">Información</span> El formulario de captura para agregar comunicados.
        </div>
    </div>
        
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('comunicados.save')}}" method="post" id="registercomunicado" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Agregar Nuevo</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Comunicado</h3>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Titulo</label>
                                    <input id="titulo" name="titulo" type="text" class="form-control" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Localidad</label>
                                    <input id="localizacion" name="localizacion" type="text" class="form-control" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Contenido</label>
                                    <textarea name="contenido" id="contenido" cols="30" rows="7" class="form-control" aria-required="true"></textarea> 
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Imagen</label>
                                    <input id="imagen_comunicado" name="imagen_comunicado" type="file" accept="image/*" class="form-control" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Categoría</label>
                                    <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">url</label>
                                    <input id="url" name="url" type="text" class="form-control urlinput" aria-required="true">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-paper-plane"></i> Agregar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop