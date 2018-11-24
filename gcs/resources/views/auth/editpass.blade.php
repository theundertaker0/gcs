@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Editar Contraseña</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('editUserPass') }}
        </div>
    </div>
    <div class="row text-center margenInferior paddingSuperior">
        <div class="col-12">
            @if(session('success'))
                <p class="alert-success">{{session('success')}}<a href="{{url('/')}}" class="btn btn-link"> Regresar a página principal</a></p>
                @else
                @if(session('errors'))
                    <p class="alert-danger">Contraseña actual no coincide con la registrada</p>
                @endif
            @endif
            <img src="{{ asset('img/logogcs.png')}}" alt="Logo GCS" class="logomediano">
        </div>

    </div>

    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <form method="POST" action="{{url('/updatepass')}}">
                @csrf

                <div class="row margenInferior">
                    <div class="col-12">
                        <label for="passwordactual">{{ __('Contraseña Actual') }}*</label>
                        <input id="passwordactual" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="passwordactual" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-6">
                        <label for="password">{{ __('Nueva Contraseña') }}*</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group col-6">
                        <label for="password-confirm">{{ __('Confirmar contraseña') }}*</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row text-center margenInferior">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btnPrincipal">
                            <span class="fa fa-sign-in-alt"></span>&nbsp;{{ __('Cambiar Contraseña') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.state').select2();
        });
        $('.state').val("{{$user->state}}").trigger('change');
    </script>
@endsection
