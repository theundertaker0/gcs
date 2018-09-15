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



        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <style type="text/css">
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
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
                font-size: 24px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
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
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }	
            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
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
            table.table td i {
                font-size: 19px;
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
                font-size: 13px;
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
                font-size: 13px;
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
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }	
            .modal form label {
                font-weight: normal;
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
                                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar Empresas</span></a>						
                            </div>
                        </div>
                    </div>






                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                </th>
                                <th></th>
                                <th>Nombre</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>url</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>Liverpool</td>
                                <td>c. 60 prol. Mont. Norte, Mérida</td>
                                <td>Yucatán</td>
                                <td>http://www.liverpool.com</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                                <td>Chedarui</td>
                                <td>c. 60 x 29. col. Chuburna, Mérida</td>
                                <td>Yucatán</td>
                                <td>http://www.chedrauimexico.com</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                         <!--   <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                        <label for="checkbox3"></label>
                                    </span>
                                </td>
                                <td>Maria Anders</td>
                                <td>mariaanders@mail.com</td>
                                <td>25, rue Lauriston, Paris, France</td>
                                <td>(503) 555-9931</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                        <label for="checkbox4"></label>
                                    </span>
                                </td>
                                <td>Fran Wilson</td>
                                <td>franwilson@mail.com</td>
                                <td>C/ Araquil, 67, Madrid, Spain</td>
                                <td>(204) 619-5731</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>					
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                        <label for="checkbox5"></label>
                                    </span>
                                </td>
                                <td>Martin Blank</td>
                                <td>martinblank@mail.com</td>
                                <td>Via Monte Bianco 34, Turin, Italy</td>
                                <td>(480) 631-2097</td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <script>
                    $(function () {
                        $('#table').DataTable({
                            //   processing: true,
                            //   serverSide: true,
                            // ajax: '{{ url('index') }}',
                            //  columns: [
                            //      {data: 'name', name: 'nombre'},
                            //      {data: 'city', name: 'ciudad'},
                            //      {data: 'borough', name: 'municipio'},
                            //      {data: 'url', name: 'url'},
                            //      {data: '', name: 'acciones'}
                            //  ]
                        });
                    });
                </script>





<!--<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>
                <span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                </span>
            </th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Municipio</th>
            <th>url</th>
            <th>Actions</th>
        </tr>
    </thead>
    
</table>
<div class="clearfix">
    <div class="hint-text">Mostrando <b>5</b> de <b>25</b> registros</div>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</div-->
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Agregar Empresa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Empresa</label>
                                <input type="text" class="form-control" name="empresaInput" id="empresaInput" required>
                            </div>
                            <div class="form-group">
                                <label>Dirección:</label>
                                <input class="form-control" name="calleInput" id="calleInput" required/>
                            </div>
                            <div class="form-group">
                                <label>Municipio:</label>
                                <input class="form-control" name="municipioInput" id="municipioInput" required/>
                            </div>
                            <div class="form-group">
                                <label>Ciudad:</label>
                                <input class="form-control" name="ciudadInout" id="ciudadInput" required/>
                            </div>
                            <div class="form-group">
                                <label>Estado:</label>
                                <input class="form-control" name="estadoInput" id="estadoInput" required/>
                            </div>
                            <div class="form-group">
                                <label>Código Postal:</label>
                                <input class="form-control" name="codigoPostalInput" id="emoresaInput" required/>
                            </div>
                            <div class="form-group">
                                <label>url:</label>
                                <input class="form-control" name="urlInput" id="urlInpul"  required/>
                            </div>
                            <div class="form-group">
                                <label>Observaciones:</label>
                                <textarea class="form-control" required> </textarea>
                            </div>
                            <!-- <div class="form-group">
                                 <label>Telefono</label>
                                 <input type="text" class="form-control" required>
                             </div>	-->				
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
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Modificar Empresa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Empresa</label>
                                <input type="text" class="form-control" name="empresaInputEdit" id="empresaInputEdit" required>
                            </div>
                            <div class="form-group">
                                <label>Dirección:</label>
                                <input class="form-control" name="calleInputEdit" id="calleInputEdit" required/>
                            </div>
                            <div class="form-group">
                                <label>Municipio:</label>
                                <input class="form-control" name="municipioInputEdit" id="municipioInputEdit" required/>
                            </div>
                            <div class="form-group">
                                <label>Ciudad:</label>
                                <input class="form-control" name="ciudadInoutEdit" id="ciudadInputEdit" required/>
                            </div>
                            <div class="form-group">
                                <label>Estado:</label>
                                <input class="form-control" name="estadoInputEdit" id="estadoInputEdit" required/>
                            </div>
                            <div class="form-group">
                                <label>Código Postal:</label>
                                <input class="form-control" name="codigoPostalInputEdit" id="codigoPostalInputEdit" required/>
                            </div>
                            <div class="form-group">
                                <label>url:</label>
                                <input class="form-control" name="urlInputEdit" id="urlInputEdit"  required/>
                            </div>
                            <div class="form-group">
                                <label>Observaciones:</label>
                                <textarea class="form-control" required> </textarea>
                            </div>
                            <!-- <div class="form-group">
                                 <label>Telefono</label>
                                 <input type="text" class="form-control" required>
                             </div>	-->				
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
                            <p class="text-warning"><small>Esta acción no se podrá deshacer.</small></p>
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