
<div class="content-page" style="padding: 0px;">

    <!-- <h1 class="display-1" style="text-align: Center;">Bienvenido Alumno!</h1> -->


    <div class="content-page" style="padding: 18px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex flex-row justify-content-end">
                                        <div class="col-x-3">
                                            <button id="agregaractivo" onclick="Asignar_Curso()" class="btn btn-info d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspAsginar Curso</button>
                                        </div>
                                        <!-- <div class="col-x-3">
                                            <button id="agregaractivo" onclick="agregar_Actividad()" class="btn btn-warning d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspCrear Actividad</button>
                                        </div>
                                        <div class="col-x-3">
                                            <button id="agregaractivo" onclick="Ver_Calificaciones()" class="btn btn-blue waves-effect waves-light m-l-15 mx-2">&nbspVer Calificaciones</button>
                                        </div> -->
                            </div>
                            <h4 class="header-title" style="text-align: center;font-size:50px">CURSOS INSCRITOS</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaCurso" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Curso</th>
                                            <th style="text-align: center;">DNI</th>
                                            <th style="text-align: center;">ROL</th>
                                            <th style="text-align: center;">ESTADO</th>
                                 
                                        </tr>
                                    </thead>
                                    <tbody id="curso-tabla">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/Test.js"></script>        


