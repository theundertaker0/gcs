@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center margenInferior">
        <div class="col-12">
            <h1 class="text-center">Editar Factura</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('editBill',$bill) }}
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="{{action('BillController@update', $bill->id)}}" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                        <label for="folio">Folio:</label>
                        <input type="text" class="form-control" name="folio" value="{{$bill->folio}}" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" name="fecha" value="{{$bill->date}}" required>
                    </div>
                    <div class="form-group">
                        <label for="picture">Imagen/Documento:</label>
                        <input type="file" id="picture" name="picture" accept="application/pdf, image/*">
                    </div>
                    <div class="form-group">
                        <label for="picturePreview">Imagen/Documento actual:</label>
                        @if($bill->picture=="dummyBill.jpg")
                           <span class="fas fa-eye-slash"></span>
                        @else
                            <a href="{{asset('bills/images/'.$bill->picture)}}" target="_blank" class="btn btn-secondary">&nbsp;<span class="fas fa-image"></span>&nbsp;/&nbsp;<span class="fas fa-file-pdf"></span></a>
                        @endif
                    </div>
                    <div class="form-group text-center paddingSuperior">
                        <button type="submit" class="btn btn-warning btnPrincipal" style="margin-left:38px">Actualizar</button>
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
