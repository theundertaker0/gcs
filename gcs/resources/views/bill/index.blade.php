@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Facturas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('bill') }}
        </div>
        <div class="col-12">
            <a href="{{route('bill.create')}}" class="btn btn-warning btnPrincipal"><span class="fa fa-plus"></span>&ensp;Agregar Factura</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <br />
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div><br />
            @endif
            <table class="table" id="tblBills">
                <thead>
                    <tr>
                        <th class="text-center">Folio</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Imagen</th>
                        <th class="text-center">Acciones</th>
                        <th class="text-center">Eliminar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function() {
        $('#tblBills').DataTable({
            "processing": true,
            "serverSide": true,
            "language": {
                "search":"Buscar",
                "lengthMenu": "Mostar _MENU_ registros por página",
                "zeroRecords": "No existen registros que coincidan con el criterio",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Registros no encontrados",
                "infoFiltered": "(Filtrado en _MAX_ registros totales)"
            },
            "scrollY":        "450px",
            "scrollCollapse": true,
            "paging":         false,
            "ajax": "{{ url('/facturas') }}",
            "columns": [
                {data: 'folio', name: 'folio',width:"25%"},
                {data: 'date', name: 'date',width:"25%"},
                {
                    data:null,
                    width:"15%",
                    render:function(data,type,full,meta){
                        if(data.picture=="dummyBill.jpg"){
                            return '<i class="fas fa-eye-slash"></i>';
                        }else{
                            if(data.picture.split('.').pop()=="pdf"){
                                return '<a href="{{asset("/bills/images/")}}/'+data.picture+'" target="_blank" class="btn btn-secondary" data-toggle="tooltip" title="Ver Archivo de la Factura"><span class="fas fa-file-pdf"></span></a>'
                            }else{
                                return '<a href="{{asset("/bills/images/")}}/'+data.picture+'" target="_blank" class="btn btn-secondary" data-toggle="tooltip" title="Ver Imagen de la Factura"><span class="fas fa-image"></span></a>'
                            }
                        }


                    }
                },
                {
                    data:null,
                    width:"20%",
                    render:function(data,type,full,meta){
                        return '<a href="billproducts/'+data.id+'" class="btn btn-secondary" data-toggle="tooltip" title="Ver artículos"><span class="fas fa-eye"></span></a>&nbsp;'+
                            '<a href="addproduct/'+data.id+'" class="btn btn-secondary" data-toggle="tooltip" title="Agregar Artículo"><span class="fas fa-plus"></span></a>&nbsp;'+
                            '<a href="bill/'+data.id+'/edit/" class="btn btn-secondary" data-toggle="tooltip" title="Editar Factura"><span class="fas fa-edit"></span></a>&nbsp;'

                    }
                },
                {
                    data:null,
                    width:"10%",
                    render:function(data,type,full,meta){
                        return  '<form action="{{url("bill")}}/'+data.id+'" method="post" style="max-width:45x;">'+
                            '    {{csrf_field()}}' +
                            '    <input name="_method" type="hidden" value="DELETE">' +
                            '    <button class="btn btn-secondary" type="submit" data-toggle="tooltip" title="Eliminar Factura" onclick="return confirm(\'¿Seguro que desea eliminar la factura definitivamente?\')"><span class="fas fa-trash-alt"></span></button></form>';

                    }
                }
            ]
        });
    });


</script>
@endsection
