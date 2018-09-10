@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center margenInferior paddingSuperior">
        <div class="col-12">
            @if(session('success'))
            <p class="alert-success">{{session('success')}}<a href="{{url('/')}}" class="btn btn-link"> Regresar a página principal</a></p>
            @endif
            <img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" alt="Logo GCS" class="avatar">
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <form method="POST" action="{{route('storeuser')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <input type="file" class="" id="avatar" name="avatar" accept="image/*">
                    @if ($errors->has('avatar'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="name">{{ __('Nombre') }}*</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="last_name">{{ __('Apellidos') }}</label>
                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ $user->last_name }}" autofocus>

                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="email2">{{ __('Correo electrónico') }}*</label>
                    <input id="email2" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email2" value="{{ $user->email }}" required disabled>
                    <input type="hidden" value="{{$user->email}}" name="email" id="email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="form-group row">
                    <label for="address">{{ __('Dirección') }}</label>
                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $user->address }}" autofocus>

                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="row">
                    <div class="form-group col-4" style="padding-left: 0px">
                        <label for="city">{{ __('Ciudad') }}</label>
                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" autofocus>

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group col-4" style="padding: 0px">
                        <label for="state">{{ __('Estado') }}</label>
                        <select name="state" id="state" class="form-control state" value="{{ $user->state }}" autofocus>
                            <option value="null">Seleccione...</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group col-4" style="padding-right: 0px;padding-left: 0px;">
                        <label for="cp">{{ __('CP') }}</label>
                        <input id="cp" type="text" class="form-control{{ $errors->has('cp') ? ' is-invalid' : '' }}" name="cp" value="{{ $user->cp }}" autofocus>

                        @if ($errors->has('cp'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row text-center margenInferior">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btnPrincipal">
                            <span class="fa fa-sign-in-alt"></span>&nbsp;{{ __('Editar') }}
                        </button>
                    </div>
                </div>

            </form>
            <div class="row text-center">
                <div class="col-12">
                    <a href="{{route('changepass')}}" class="btn btn-link">Si necesita cambiar su contraseña de clic en este enlace</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#state').select2();
            $('#avatar').fileselect({
                language:'es',
                allowedNumberOfFiles: 1, // default: false, no limitation
                allowedFileExtensions: ['jpg','png','gif','jpeg'],// default: false, all extensions allowed
                allowedFileSize: 2097152, // 2MB, default: false, no limitation
                browseBtnClass: 'btn btn-warning btnPrincipal',
            });

        });
        $('.state').val("{{$user->state}}").trigger('change');

    </script>


@endsection
