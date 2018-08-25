@extends('layouts.masterFront')

@section('content')

    <div class="row text-center margenInferior paddingSuperior">
        <div class="col-12">
            <img src="{{asset('img/logogcs.png')}}" alt="Logo GCS" class="logomediano">
        </div>

    </div>

    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email">{{ __('Correo electrónico') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

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
                            <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning btnPrincipal">
                                    <span class="fa fa-key"></span>{{ __('Cambiar Contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
@endsection
