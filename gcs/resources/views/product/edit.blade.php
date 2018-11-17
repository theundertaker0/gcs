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
            {{ Breadcrumbs::render('editProduct',$product) }}
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="{{action('ProductController@update',$product->id)}}">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group">
                    <label for="serie">Número de Serie:</label>
                    <input type="text" class="form-control" name="serie" value="{{$product->serial_number}}" required>
                </div>
                <div class="form-group">
                    <label for="factura">Factura:</label>
                    <select name="factura" id="factura" class="form-control" style="width:100%">
                        @foreach($bills as $bill)
                            <option value="{{$bill->id}}" {{ $product->bills_id == $bill->id ? 'selected="selected"' : '' }}>{{$bill->folio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="empresa">Empresa:</label>
                    <input type="text" class="form-control" name="empresa" value="{{$product->brand}}" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <select name="marca" id="marca" class="form-control" style="width: 100%;">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}" {{ $product->enterprises_id == $brand->id ? 'selected="selected"' : '' }}>{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" name="fecha" value="{{$product->final_date}}" required>
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
