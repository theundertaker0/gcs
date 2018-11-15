@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center margenInferior">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Nueva Factura</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('newBill') }}
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="{{action('BillController@store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="folio">Folio:</label>
                        <input type="text" class="form-control" name="folio" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="picture">Imagen/Documento:</label>
                        <input type="file" id="picture" name="picture" accept="application/pdf, image/*">
                    </div>
                    <div class="form-group text-center paddingSuperior">
                        <button type="submit" class="btn btn-warning btnPrincipal">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('#picture').fileselect({
            language:'es',
            allowedNumberOfFiles: 1, // default: false, no limitation
            allowedFileExtensions: ['jpg','png','gif','jpeg','pdf'],// default: false, all extensions allowed
            allowedFileSize: 1024*1024*5, // 2MB, default: false, no limitation
            browseBtnClass: 'btn btn-secondary',
        });
    </script>
@endsection
