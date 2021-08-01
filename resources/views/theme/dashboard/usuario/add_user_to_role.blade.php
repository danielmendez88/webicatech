{{-- DISEÑADO Y DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ PARA ICATECH AÑO 2021--}}
@extends('theme.dashboard.index')

@section('contentSyles')
    <style>
        .error {
            color: red;
            background-color: #FFFFFF;
            padding-top: 10px;
        }
    </style>
@endsection

@section('contenido')
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}
    </div>
    @endif
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Nombre del Usuario: {{ $getUser->name }}</h4>
                <p class="card-description"> Características del Perfil </p>
                <form class="form-sample" id="action_user_form" action="{{ route('edit_user_update', [base64_encode($getUser->id)]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Correo Electrónico:</label>
                                <div class="col-sm-8">
                                    {{ $getUser->email }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Usuario:</label>
                                <div class="col-sm-8">
                                    <b>{{ $getUser->username }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Rol Asignado:</label>
                                <div class="col-sm-8">
                                    @if ($hasAnyRole)
                                        <b>{{ $getRole[0] }}</b>
                                    @else
                                        <b>{{ $getRole }}</b> 
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Rol a Seleccionar:</label>
                                <div class="col-sm-8">
                                    <select name="roles" id="roles" class="form-control form-control-lg">
                                        <option value="">--ELEGIR--</option>
                                        @foreach ($allRoles as $itemRol)
                                            <option value="{{ $itemRol->id }}" {{ ($itemRol->name == $getRole[0]) ? 'selected' : '' }}>{{ $itemRol->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nombre Completo:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="{{ $getUser->name }}"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Modificar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Bien Hecho!</strong> {{ $message }}
        </div>
    @endif
@endsection

@section('contentScriptJs')
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.js') }}"></script>
    <script>
        $(function(){
            $('#action_user_form').validate({
                rules: {
                    nombre_usuario: { required: true },
                    roles: { required: true },
                },
                messages: {
                    nombre_usuario: { required: "NOMBRE REQUERIDO" },
                    roles: { required: "SELECCIONAR UN ROL" },
                }
            });
        });
    </script>
@endsection