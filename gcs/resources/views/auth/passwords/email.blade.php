@extends('layouts.masterFront')

@section('content')
    <div class="row text-center margenInferior paddingSuperior">
        <div class="col-12">
            <img src="{{asset('img/logogcs.png')}}" alt="Logo GCS" class="logomediano">
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email">{{ __('Correo electrónico de recuperación') }}</label>


                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group row text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning btnPrincipal">
                                    <span class="fa fa-envelope"></span>&nbsp;{{ __('Enviar Solicitud de Recuperación') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
@endsection
