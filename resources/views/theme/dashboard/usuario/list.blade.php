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
                <h4 class="card-title">FORMULARIO DE ADMINISTRADOR DE USUARIOS</h4>
                <p class="card-description"> Nuevo Usuario </p>
                <form class="form-sample" id="action_user_form" action="{{ route('new_user_store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" id="nombre" class="form-control" />
                                    @if ($errors->has('seccion'))
                                        <span class="text-danger">{{ $errors->first('seccion') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Usuario</label>
                                <div class="col-sm-9">
                                    <input type="text" name="usuario" id="usuario" class="form-control" />
                                    @if ($errors->has('seccion'))
                                        <span class="text-danger">{{ $errors->first('seccion') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Correo</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" id="email" class="form-control"/>
                                    @if ($errors->has('seccion'))
                                        <span class="text-danger">{{ $errors->first('seccion') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" />
                                    @if ($errors->has('seccion'))
                                        <span class="text-danger">{{ $errors->first('seccion') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Repetir Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" name="corroborar_contrasena" id="corroborar_contrasena" class="form-control" placeholder="Contraseña Nuevamente" />
                                    @if ($errors->has('seccion'))
                                        <span class="text-danger">{{ $errors->first('seccion') }}</span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Enviar</button>
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
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Lista de Usuarios Activos</h4>
                    <p class="card-description"> Usuarios Activos </p>
                    <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                        <thead role="rowgroup">
                            <tr role="row">
                            <th role="columnheader">Nombre</th>
                            <th role="columnheader">Email</th>
                            <th role="columnheader">Usuario</th>
                            <th role="columnheader">Ajustes</th>
                            </tr>
                        </thead>
                        <tbody role="rowgroup">
                            @if (count($allUsers) > 0)
                                @foreach ($allUsers as $itemUser)
                                    <tr role="row">
                                        <td role="cell" scope="row">{{ $itemUser->name }}</td>
                                        <td role="cell">{{ $itemUser->email }}</td>
                                        <td role="cell">{{ $itemUser->username }}</td>
                                        <td role="cell">
                                            <a href="{{ route('edit_user_setting', ['id' => base64_encode($itemUser->id)]) }}">
                                                <i class="fas fa-users-cog fa-2x"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr role="row">
                                    <td role="cell" colspan="4"><b>No hay registros</b></td>
                                </tr>
                            @endif
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contentScriptJs')
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js_/init-scripts/jquery-validation/dist/additional-methods.js') }}"></script>
    <script>
        $(function(){
            $('#action_user_form').validate({
                rules: {
                    nombre: { required: true },
                    usuario: { required: true },
                    email: {
                        required: true,
                        email: true
                    },
                    contrasena: {
                        required: true,
                        minlength: 5
				    },
                    corroborar_contrasena: {
                        required: true,
                        minlength: 5,
                        equalTo: "#contrasena"
				    },


                },
                messages: {
                    nombre: { required: "NOMBRE REQUERIDO" },
                    usuario: { required: "USUARIO REQUERIDO" },
                    email: {
                        required: "CORREO ELECTRÓNICO REQUERIDO",
                        email: "INGRESAR UN CORREO VÁLIDO"
                    },
                    contrasena: {
                        required: "CONTRASEÑA REQUERIDA",
                        minlength: "LA CONTRASEÑA DEBE TENER AL MENOS 5 CARACTERES"
                    },
                    corroborar_contrasena: {
                        required: "CONTRASEÑA REQUERIDA",
                        minlength: "LA CONTRASEÑA DEBE TENER AL MENOS 5 CARACTERES",
                        equalTo: "INGRESE LA MISMA CONTRASEÑA"
                    }
                }
            });
        });
    </script>
@endsection