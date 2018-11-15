@extends('layouts.masterFront')

@section('head')


@endsection



@section('content')
    <div class="row text-center">
        <div class="col-12" style="padding-top: 2em;">
            <h1 class="text-center">Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ Breadcrumbs::render('product') }}
        </div>
        <div class="col-12">
            <a href="{{route('product.create')}}" class="btn btn-warning btnPrincipal"><span class="fa fa-plus"></span>&ensp;Agregar Producto</a>
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
            <table class="table" id="tblProducts">
                <thead>
                <tr>
                    <th class="text-center">Número de Serie</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Fin de Garantía</th>
                    <th class="text-center">Acciones</th>
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
            $('#tblProducts').DataTable({
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
                "ajax": "{{ url('/productos') }}",
                "columns": [
                    {data: 'serial_number', name: 'serial_number',width:"20%"},
                    {data: 'description', name: 'description',width:"40%"},
                    {data:'final_date',name:'final_date',width:"20%"},
                    {
                        data:null,
                        width:"20%",
                        render:function(data,type,full,meta){
                            return '<form action="{{url("product")}}/'+data.id+'" method="post" style="max-width:45x;">'
                                +'<button class="btn btn-secondary" data-toggle="tooltip" title="Ver Detalles de Producto"><span class="fas fa-eye"></span></button>&nbsp;'+
                                '<a href="product/'+data.id+'/edit/" class="btn btn-secondary" data-toggle="tooltip" title="Editar Producto"><span class="fas fa-edit"></span></a>&nbsp;'+
                                '    {{csrf_field()}}' +
                                '    <input name="_method" type="hidden" value="DELETE">' +
                                '    <button class="btn btn-secondary" type="submit" data-toggle="tooltip" title="Eliminar Producto" onclick="return confirm(\'¿Seguro que desea eliminar el producto definitivamente?\')"><span class="fas fa-trash-alt"></span></button></form>';

                        }
                    }
                ]
            });
        });


    </script>
@endsection
