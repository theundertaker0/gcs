@extends('layouts.masterFront')

@section('head')

@endsection

@section('content')
<div class="row">
    <div class="col-12 text-center">

    </div>
    <div class="col-12 text-center">
        <h2>Garantía Completa y Segura</h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>

            </thead>
            <tbody>
        @forelse($bills as $bill)
            <tr>
                <td>{{$bill->folio}}</td>
                <td>{{$bill->date}}</td>
                <td>{{$bill->picture}}</td>
                <td>
                    <a class="btn btn-outline-primary">Ver</a>
                    <a class="btn btn-outline-danger">Borrar</a>
                </td>
            </tr>


        @empty
            <p>No hay Productos</p>

        @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('scripts')

@endsection
