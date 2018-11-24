@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center margenInferior">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Nuevo Producto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('newProduct') }}
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="{{action('ProductController@store')}}">
                @csrf
                <div class="form-group">
                    <label for="serie">Número de Serie:</label>
                    <input type="text" class="form-control" name="serie" required>
                </div>
                <div class="form-group">
                    <label for="factura">Factura:</label>
                    <select name="factura" id="factura" class="form-control" style="width:100%">
                            <option value="{{$bill->id}}" selected="selected">{{$bill->folio}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" class="form-control" name="empresa" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <select name="marca" id="marca" class="form-control" style="width: 100%;">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha de inicio de garantía:</label>
                    <input type="date" class="form-control" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="dias">Duración de la garantía (en días):</label>
                    <input type="number" class="form-control" name="dias" min="0" max="3650" required>
                </div>
                <div class="form-group text-center paddingSuperior">
                    <button type="submit" class="btn btn-warning btnPrincipal">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $.fn.select2.defaults.set('language', 'es');
        $.fn.select2.defaults.set('theme', 'bootstrap');
        $(document).ready(function(){
            $('#factura').select2({
                width:'element'
            });
            $('#marca').select2({

            });
            $('#empresa').select2({

            });

        });
    </script>
@endsection
