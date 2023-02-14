@extends('layouts.login.index')


@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route("login.post") }}" method="post">
                    {{ method_field('POST') }}
                    @csrf
                    
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ $message }}
                        </div>
                    @endif
                    <span class="login100-form-title p-b-43">
                        <b>Administrador de Tareas Web</b>
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="text" autofocus>
                        {{-- <input class="input100" type="text" name="email"> --}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">Usuario</span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" name="pass" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        {{-- <input class="input100" type="password" name="pass"> --}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br><br>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Recordarme
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                ¿Olvidaste la Contraseña?
                            </a>
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Iniciar Sesión
                        </button>
                    </div>
                    
                    {{-- <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            or sign up using
                        </span>
                    </div> --}}

                    {{-- <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div> --}}
                </form>

                <div class="login100-more" style=" background-image: url('{{ asset('/Imagenes Pagina/icatech_banner_principal.jpg') }}'); background-size: contain, cover;">
                </div>
            </div>
        </div>
    </div>
@endsection