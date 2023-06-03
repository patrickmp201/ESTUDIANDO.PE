<script src="<?php echo base_url() ?>assets/js/CursoProfesor.js"></script>        

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
                                            <button id="agregaractivo" onclick="agregar_curso()" class="btn btn-info d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspAgregar Curso</button>
                                        </div>
                                        <div class="col-x-3">
                                            <button id="agregaractivo" onclick="agregar_Actividad()" class="btn btn-warning d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspCrear Actividad</button>
                                        </div>
                                    </div>
                            <h4 class="header-title" style="text-align: center;font-size:50px">CURSOS</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaCurso" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Curso</th>
                                            <th style="text-align: center;">Estado</th>
                                            <th style="text-align: center;">Acción</th>
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

<!-- Crear Curso -->
<div id="agregar-curso-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="form-horizontal form-material" action="" id="form-agregar-curso">
                                
                            <input type="hidden" value="" name="IdCurso" id="IdCurso"/>
                            <div class="modal-body p-4">
                                
                           
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Curso</label>
                                            <input type="text" placeholder="Ingrese nombre del curso" class="form-control" required name="NombreCurso" id="NombreCurso" > 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Estado</label>
                                            <select class="form-control custom-select" name="EstadoCurso" id="EstadoCurso" >
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>   
                                        </div>
                                    </div>
                                </div>

                                <button type="submit"  class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                                
                            </div>
                            </form>                
                            
                            
                         
                        </div>
                    </div>
                </div><!-- /.modal -->


<!-- Crear Actividad -->

<div id="agregar-actividad-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="form-horizontal form-material" action="" id="form-agregar-actividad">
                                
                            <input type="hidden" value="" name="IdActividad" id="IdActividad"/>
                            <input type="hidden" value="" name="IdAlternativa" id="IdAlternativa"/>
                            <!-- <input type="hidden" value="" name="IdRespuesta" id="IdRespuesta"/> -->

                            <div class="modal-body p-4">
                                
                           
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Nombre de la Actividad</label>
                                            <input type="text" placeholder="Ingrese nombre del curso" class="form-control" required name="NombreActividad" id="NombreActividad" > 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Enunciado</label>
                                            <input type="text" placeholder="Ingrese nombre del curso" class="form-control" required name="Enunciado" id="Enunciado" > 
                                        </div>
                                    </div>
                                </div>
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
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Nivel</label>
                                                <select class="form-control custom-select"   required name="IdNivel" id="IdNivel" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($nivel as  $niv) {?>
                                                    <option value="<?php  echo $niv->IdNivel ?>"><?php  echo $niv->Nivel ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                            <label for="field-3" class="form-label">Ingrese las Opciones</label>
                                            <textarea placeholder="Ingrese las opciones separadas por coma" class="form-control" required name="Opciones" id="Opciones"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-3" class="form-label">Respuesta</label>
                                                <input type="text" placeholder="Ingrese la respuesta" class="form-control" required name="IdRespuesta" id="IdRespuesta" > 
                                            </div>
                                            </div>
                                    </div>
                                        

                                <button type="submit"  class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                                
                            </div>
                            </form>                
                            
                            
                         
                        </div>
                    </div>
                </div><!-- /.modal -->


                <div id="CursoModal" class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content"> 
                        <div class="modal-header">
                            <h4 class="modal-title"style="text-align: center;"> Actividades del Curso</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
                            <div class="modal-title-wrapper" >

                            </div>
                            <div class="table-responsive" style="overflow-x: clip;" >
                            <div class="table-wrapper">
                                <table id="TablaparaPopUpCurso" class="fixed-table-loading table table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th style="text-align: center;">Id</th>
                                    <th style="text-align: center;">Pregunta</th>
                                    <th style="text-align: center;">Enunciado</th>
                                    <th style="text-align: center;">Nivel</th>
                                    <th style="text-align: center;">Curso</th>
                                    <th style="text-align: center;">Respuesta</th>
                

                                    </tr>
                                </thead>
                                <tbody id="listarDetalleCurso">
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        <!-- <input type="hidden" id="Idlistado">                -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
