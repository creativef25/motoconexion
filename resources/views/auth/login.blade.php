@extends('index')
@section('container')

<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Login & Registro</h2>
                        <ul>
                            <li>
                                <a href="index.html">Inicio/</a>
                            </li>
                            <li>Login | Registro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('login')}}">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Correo Electronico*</label>
                                    <input id="email" type="email" placeholder="Correo Electronico" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label>Contraseña</label>
                                    <input id="password" type="password" placeholder="Contraseña" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">Recordarme</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-1 mt-md-0">
                                    <div class="forgotton-password_info">
                                        <a href="{{ route('password.request') }}"> Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn btn-custom-size lg-size btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-10 pt-lg-0">
                    <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Registro</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nombre</label>
                                    <input type="text" placeholder="Nombre" id="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Correo Electronico*</label>
                                    <input type="email" placeholder="Correo Electronico" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Contraseña</label>
                                    <input type="password" placeholder="Contraseña" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Confirmar Contraseña</label>
                                    <input type="password" placeholder="Confirmar Contraseña" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-custom-size lg-size btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection
{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
