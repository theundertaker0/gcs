<?php
/*
 * Author: Melquizedec Moo Medina
 * Date:  October, 2018
 * Interfaz:  enterprise.index.php
 * Description: Vista CRUD que permite agregar, modificar y eliminar datos de las empresas.
 * utilizando formularios modales.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administración de Empresas</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 20px;
            }

            .btn{
                font-size: 15px;    
            }

            .table-wrapper {
                background: #fff;
                padding: 20px 25px;
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {        
                padding-bottom: 15px;
                background: #E82A0C;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 25px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 15px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 5px;
            }
            .table-title .btn i {
                float: left;
                font-size: 25px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 5px 5px;
                vertical-align: middle;
            }
            table.table tr th:first-child {
                width: 60px;
            }
            table.table tr th:last-child {
                width: 100px;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 19px;
                margin: 0 5px;
                cursor: pointer;

            }
            /*estilo para la celda */
            th {
                font-size: 15px;
            }
            td {
                font-size: 13px;
            }
            input[type=button]{
                font-size:15px;
            }
            input[type=submit]{
                font-size:15px;
            }

            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                font-size:17px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            textarea {
                font-size:17px;
                margin: 8px 0;
                display: inline-block;        
            }


            table.table td:last-child i {
                opacity: 0.9;
                font-weight: bold;
                margin: 5px 0 0;
                font-size: 25px;
            }
            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }
            table.table td a:hover {
                color: #2196F3;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #F44336;
            }

            i {
                font-size: 15px;    
            }

            table.table td i {
                font-size: 15px;
                font-weight: bold;
            }
            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 15px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }
            .pagination li a:hover {
                color: #666;
            }	
            .pagination li.active a, .pagination li.active a.page-link {
                background: #03A9F4;
            }
            .pagination li.active a:hover {        
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 16px;
            }    
            /* Custom checkbox */
            .custom-checkbox {
                position: relative;
            }
            .custom-checkbox input[type="checkbox"] {    
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }
            .custom-checkbox label:before{
                width: 18px;
                height: 18px;
            }
            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }
            .custom-checkbox input[type="checkbox"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                border-color: #fff;
            }
            .custom-checkbox input[type="checkbox"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */
            .modal .modal-dialog {
                max-width: 400px;
            }
            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                padding: 20px 30px;
            }
            .modal .modal-content {
                border-radius: 3px;
            }
            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }
            .modal .modal-title {
                display: inline-block;
            }
            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;

            }
            .modal textarea.form-control {
                resize: vertical;
                font-size: 15px;
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }	
            .modal form label {
                font-weight: normal;
            }

            /*  Calificacion de estrellas  */

            input[type="radio"] {
                display: none;
            }

            label {
                color: orange;
                font-size: 15px;
            }

            .clasificacion {
                direction: rtl;
                unicode-bidi: bidi-override;
            }

            label:hover,
            label:hover ~ label {
                color: orange;
            }

            input[type="radio"]:checked ~ label {
                color: orange;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                // Activate tooltip
                $('[data-toggle="tooltip"]').tooltip();
                // Select/Deselect checkboxes
                var checkbox = $('table tbody input[type="checkbox"]');
                $("#selectAll").click(function () {
                    if (this.checked) {
                        checkbox.each(function () {
                            this.checked = true;
                        });
                    } else {
                        checkbox.each(function () {
                            this.checked = false;
                        });
                    }
                });
                checkbox.click(function () {
                    if (!this.checked) {
                        $("#selectAll").prop("checked", false);
                    }
                });

                ///////MODAL  EDIT ////////
                // on modal show
                $(document).on("click", ".edit", function () {
                    var tr = $(this).parents("tr").html();
                    var name = $(this).parents("tr").find("td:first-child").html();
                    var url = $(this).parents("tr").find("td:eq(1)").html();
                    var observation = $(this).parents("tr").find("td:eq(4)").html();
                    //var td=tr.find("td:only-child").html();
                    document.getElementById("inputNameEdit").value = name;
                    document.getElementById("inputUrlEdit").value = url;
                    document.getElementById("inputObservationEdit").value = observation;
                });
            });
        </script>
    </head>

    @extends('layouts.masterFront')

    @section('head')

    @endsection

    @section('content')
    <div class="row text-center paddingSuperior">
        <div class="col-12 col-md-2">
            <h2>{{Auth::user()->name}}&nbsp;{{Auth::user()->last_name}}</h2>
            <hr />
            <img src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" alt="Avatar" class="avatar margenInferior">
            <div class="row margenInferior">
                <a href="/edituser" class="btn btn-lg btn-block btn-warning btnPrincipal"><span class="fa fa-edit "></span>&nbsp;Editar Perfil</a>
                <a href="" href="{{ route('logout') }}" class="btn btn-lg btn-block btn-warning btnPrincipal" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><span class="fa fa-sign-out-alt "></span>&nbsp; Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
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
        <div class="col-12 col-md-10 text-center paddingSuperiorGrande">
            <h1 class="primaryColor margenInferior">Garantía Completa y Segura</h1>
            <!--<img src="{{asset('img/logogcs.png')}}" alt="">-->
            <div class="container">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Administración de Empresas</h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nueva Empresa</span></a>
                             <!--   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar Empresas</span></a>-->
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección Web</th>
                                <th>Calificación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!--  CODIGO PARA CALIFICAR CON ESTRELLAS
                            <td><form>
                                    <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5"><label for="radio1">★</label>
                                        <input id="radio2" type="radio" name="estrellas" value="4"><label for="radio2">★</label>
                                        <input id="radio3" type="radio" name="estrellas" value="3"><label for="radio3">★</label>
                                        <input id="radio4" type="radio" name="estrellas" value="2"><label for="radio4">★</label>
                                        <input id="radio5" type="radio" name="estrellas" value="1"><label for="radio5">★</label>
                                    </p>
                                </form></td>-->

                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->url}}</td>
                                <td><form>
                                        <p class="clasificacion">
                                            <?php for ($i = 0; $i < $row->score; $i++) { ?>
                                                <label for="radio1">★</label>
                                            <?php } ?>
                                        </p>
                                    </form>
                                </td>
                                <td>
                                    <a href="#editEnterpriseModal" class="edit" data-toggle="modal">
                                        <i class="material-icons" id="edit-item" data-toggle="tooltip" data-name="{{$row->name}}" data-description="{{$row->description}}" data-url="{{$row->url}}" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                                <td style="display:none"> {{$row->observation}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $data->render() !!}
                </div>
                <script>
                    $(function () {
                        $('#table').DataTable({
                        });
                    });
                </script>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{URL::to('createenterprises')}}" aria-label="{{ __('Enterprises') }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-header">						
                            <h4 class="modal-title">Agregar Empresa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="inputName" id="inputName" required>
                            </div>
                            <div class="form-group">
                                <label>Dirección Web:</label>
                                <input class="form-control" name="inputUrl" id="inputUrl"  required/>
                            </div>
                            <div class="form-group">
                                <label>Observaciones:</label>
                                <textarea class="form-control" name="inputObservation" id="inputObservation" maxlength="240" required> </textarea>
                            </div>				
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-success" value="Agregar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEnterpriseModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{URL::to('editenterprises')}}" aria-label="{{ __('Enterprises') }}"  enctype="multipart/form-data">
                        <div class="modal-header">						
                            <h4 class="modal-title">Modificar Empresa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="inputName" id="inputNameEdit" required>
                            </div>
                            <div class="form-group">
                                <label>Dirección Web:</label>
                                <input type="text" class="form-control" name="inputUrl" id="inputUrlEdit"  required/>
                            </div>
                            <div class="form-group">
                                <label>Observaciones:</label>
                                <textarea    class="form-control" name="inputObservationEdit" id="inputObservationEdit"  required> </textarea>
                            </div>				
                        </div>

                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-info" value="Guardar Cambios">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Eliminar Empresa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Estás seguro de eliminar los registros?</p>
                            <p>Esta acción no se podrá deshacer.</p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection

</html>  