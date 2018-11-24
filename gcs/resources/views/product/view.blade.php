@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center margenInferior">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Ver Producto</h1>
        </div>
    </div>
    {{ Breadcrumbs::render('showProduct',$product) }}
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header text-center">
                    <h4>{{$product->serial_number}}</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Vencimiento: {{$product->final_date}}</h5>
                    @if((int)$faltante>15)
                    <p class="alert-success text-center">Restante: {{$faltante}} días</p>
                    @elseif((int)$faltante<7)
                        <p class="alert-danger text-center">Restante: {{$faltante}} días</p>
                        @else
                        <p class="alert-warning text-center">Restante: {{$faltante}} días</p>
                    @endif
                    <p class="card-text">Marca: {{$brand->name}}</p>
                    <p class="card-text">Empresa: {{$product->brand}}</p>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-secondary"><span class="fas fa-edit"></span></a>
                </div>
                <div class="card-footer text-muted text-center">
                    Factura: {{$bill->folio}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection