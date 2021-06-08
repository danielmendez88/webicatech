@extends("theme.lte.layout_news")
@section('title', 'Icatech | Agregar comunicado')


@section('content')
<div class="container g-pt-50">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <div style="text-align: center;">
        <h3><b>REDACTAR COMUNICADO</b></h3>
    </div>
    <hr style="border-color:dimgray">
    <form action="{{ route('comunicados.save')}}" method="post" id="registercomunicado" enctype="multipart/form-data">
        @csrf {{-- modificaciones --}}
        
        <div class="form-row">
            <!--TITULO LOCALIDAD-->
            <div class="form-group col-md-8">
                <label for="titulo " class="control-label">TIULO</label>
                <input id="titulo" name="titulo" type="text" class="form-control" aria-required="true" autocomplete="off">
            </div>
            
            <div class="form-group col-md-4">
                <label for="apellidoPaterno" class="control-label">LOCALIDAD</label>
                <input id="localizacion" name="localizacion" type="text" class="form-control" aria-required="true" autocomplete="off">
            </div>
            <!-- TITULO LOCALIDAD  END -->
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cc-payment" class="control-label mb-1">CATEGORÍA</label>
                <input id="categoria" name="categoria" type="text" class="form-control" aria-required="true" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="cc-payment" class="control-label mb-1">URL</label>
                <input id="url" name="url" type="text" class="form-control" aria-required="true" autocomplete="off">
            </div>
            <div class="form-group col-md-4">
                <label for="cc-payment" class="control-label mb-1">IMAGEN</label>
                <input id="imagen_comunicado" name="imagen_comunicado" type="file" accept="image/*" class="form-control" aria-required="true">
            </div>
        </div>
        <div class="form-row">
            <!-- domicilio -->
            <div class="form-group col-md-12">
                <label for="cc-payment" class="control-label mb-1">CONTENIDO</label>
                <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control" aria-required="true"></textarea> 
            </div>
        </div>
        <!--botones de enviar y retroceder-->
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-danger" href="{{URL::previous()}}">Regresar</a>
                </div>
                <div class="pull-right">
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-paper-plane"></i>
                        GENERAR COMUNICADO
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<br>
@endsection
@section('script_content_js')
<script src="https://cdn.tiny.cloud/1/3vlifpzxzov4vsfasb0w8g6hj25ameqr2bm3kc9ktscj2jnw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#contenido',
      language: 'es_MX'
    });
</script>
@endsection
{{-- modificaciones --}}
