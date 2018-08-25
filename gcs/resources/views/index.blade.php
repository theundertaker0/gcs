@extends('layouts.masterFront')

@section('head')

@endsection

@section('content')
<div class="row text-center paddingSuperior">
    <div class="col-12 col-md-4">
        <h2>{{Auth::user()->name}}&nbsp;{{Auth::user()->last_name}}</h2>
        <hr />
        <img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" alt="Avatar" class="avatar margenInferior">
        <div class="row margenInferior">
            <a href="/edituser" class="btn btn-lg btn-block btn-warning btnPrincipal"><span class="fa fa-edit "></span>&nbsp;Editar Perfil</a>
            <a href="" href="{{ route('logout') }}" class="btn btn-lg btn-block btn-warning btnPrincipal" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="fa fa-sign-out-alt "></span>&nbsp; Salir</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <h2>Productos</h2>
        <hr />
        <div class="row margenInferior">
            <a href="" class="btn btn-lg btn-block btn-warning btnPrincipal"><span class="fa fa-plus-square "></span>&nbsp;Nuevo Producto</a>
            <a href="" class="btn btn-lg btn-block btn-warning btnPrincipal"><span class="fa fa-eye "></span>&nbsp;Mis Productos</a>
        </div>
        <h2>Garantías</h2>
        <hr />
        <div class="row margenInferior">
            <a href="" class="btn btn-lg btn-block btn-warning btnPrincipal"><span class="fa fa-eye "></span>&nbsp;Mis Garantías</a>
        </div>
    </div>
    <div class="col-12 col-md-8 text-center paddingSuperiorGrande">
        <h1 class="primaryColor margenInferior">Garantía Completa y Segura</h1>
        <img src="{{asset('img/logogcs.png')}}" alt="">
    </div>
</div>
@endsection

@section('scripts')

@endsection
