@extends('layouts.masterFront')

@section('content')
<div class="row text-center margenInferior paddingSuperior">
    <div class="col-12">
        <img src="{{asset('img/logogcs.png')}}" alt="Logo GCS" class="logomediano">
    </div>

</div>

<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="form-group row">
                <label for="email">{{ __('Correo electrónico') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>

                           <label class="form-check-label" for="remember">
                        {{ __('Recordar contraseña') }}
                    </label>
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-12">
                    <button type="submit" class="btn btn-warning btnPrincipal">
                        <span class="fa fa-sign-in-alt"></span> {{ __('Iniciar Sesión') }}
                    </button>
                </div>
                <div class="col-12">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide mi contraseña, solicitar una nueva') }}
                    </a>
                </div>
                <div class="col-12">
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Crear una cuenta') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
