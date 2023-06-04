<script src="<?php echo base_url() ?>assets/js/EleccionNivel.js"></script>        

<div class="content-page" style="padding: 0px;">

    <!-- <h1 class="display-1" style="text-align: Center;">Bienvenido Alumno!</h1> -->


    <div class="content-page" style="padding: 18px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <!-- <div class="d-flex flex-row justify-content-end">
                                        <div class="col-x-3">
                                            <button id="agregaractivo" onclick="agregar_curso()" class="btn btn-info d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspAgregar Curso</button>
                                        </div>
                                    </div> -->
                            <h4 class="header-title" style="text-align: center;font-size:50px">CURSOS SEGÚN NIVEL</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaCurso" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Actividad</th>
                                            <th style="text-align: center;">Enunciado</th>
                                            <th style="text-align: center;">Curso</th>
                                            <th style="text-align: center;">Nivel</th>
                                            <th style="text-align: center;">Realizar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="curso-tabla">
                                    <!-- <div class="row" >
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Curso</label>
                                                <select class="form-control custom-select"   required name="IdCurso" id="IdCurso" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($curso as  $cur) {?>
                                                    <option value="<?php  echo $cur->IdCurso ?>"><?php  echo $cur->NombreCurso ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="agregar-curso-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="form-horizontal form-material" action=""  id="form-agregar-curso">
                                
                                <div class="modal-body p-4">
                                    

                                    <div class="row">
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Curso</label>
                                                <select class="form-control custom-select"   required name="IdCurso" id="IdCurso" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($curso as  $cur) {?>
                                                    <option value="<?php  echo $cur->IdCurso ?>"><?php  echo $cur->NombreCurso ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                                </br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Estado</label>
                                                <select class="form-control custom-select" name="Estado" id="Estado" >
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                </select>   
                                            </div>
                                        </div>
                                    </div>
                                                
                                            <button type="submit" class="btn btn-info waves-effect"  data-dismiss="modal">Guardar</button>
                                            
                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                                <input type="hidden" value="" name="txt_usuario" id="txt_usuario"/>

                            </form>

                                         </div> 
                    </div>
                    </div>

