
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
                             
                            </div>
                            <h4 class="header-title" style="text-align: center;font-size:50px">CURSOS INSCRITOS</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaCurso" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">DNI</th>
                                            <th style="text-align: center;">CURSO</th>
                                            <th style="text-align: center;">Rol</th>
                                            <th style="text-align: center;">ESTADO</th>
                                            <th style="text-align: center;">ACCION</th>
                                            <!-- <th style="text-align: center;">DNI</th>
                                            <th style="text-align: center;">Colegio de Procedencia</th>
                                            <th style="text-align: center;">Grado</th> -->
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex flex-row justify-content-end">
                                        
                                         <div class="col-x-3">
                                            <button id="agregaractivo" onclick="agregar_Actividad()" class="btn btn-warning d-none d-lg-block m-l-15 mx-2"><i class="fa fa-plus-circle"></i>&nbspCrear Actividad</button>
                                        </div>
                                      
                            </div>
                            <h4 class="header-title" style="text-align: center;font-size:50px">ACTIVIDADES</h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaActividades" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Nombre Actividad</th>
                                            <th style="text-align: center;">Enunciado</th>
                                            <th style="text-align: center;">Curso</th>
                                            <th style="text-align: center;">Nivel</th>
                                            <th style="text-align: center;">Estado</th>
                                            <th style="text-align: center;">Acción</th>


                                            <!-- <th style="text-align: center;">DNI</th>
                                            <th style="text-align: center;">Colegio de Procedencia</th>
                                            <th style="text-align: center;">Grado</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="actividad-tabla">
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
                                    <div class="row">
                                          <div class="mb-12">
                                          <label class="form-label">Estado</label>

                                                        <label class="form-label"></label>
                                                        <select class="form-control custom-select" name="EstadoActividad" id="EstadoActividad" >
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>   
                                                    </div>

                                </div>
                                                </br>
                                        

                                <button type="submit"  class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                                
                            </div>
                            </form>                
                            
                            
                         
                        </div>
                    </div>
                </div><!-- /.modal -->


            
                <div id="asignar-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Content is Responsive</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="form-horizontal form-material" action="" id="form-asignar">
                                
                            <input type="hidden" value="" name="IdCursoUsuario" id="IdCursoUsuario"/>
              

                            <div class="modal-body p-4">
                                
                            <div class="row">
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Usuario</label>
                                                <select class="form-control custom-select"   required name="IdUsuarioDNI" id="IdUsuarioDNI" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($registroAct as  $reg) {?>
                                                    <option value="<?php  echo $reg->DNI ?>"><?php  echo $reg->DNI ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
               
                                                </BR>
                                <div class="row">
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Curso</label>
                                                <select class="form-control custom-select"   required name="IdCurso" id="IdCurso" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($cursoAct as  $cur) {?>
                                                    <option value="<?php  echo $cur->IdCurso ?>"><?php  echo $cur->NombreCurso ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                                </br>
                                    <div class="row">
                                            <div class="mb-12">
                                            <label class="form-label">Elegir Rol</label>
                                            <select class="form-control custom-select"   required name="IdRol" id="IdRol" >
                                                    <option value="">Seleccione</option>                                                
                                                <?php foreach ($rolAct as  $rol) {?>
                                                    <option value="<?php  echo $rol->IdRol ?>"><?php  echo $rol->TipoRol ?></option>                                                
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                                </br>
                                    <div class="row">
                                          <div class="mb-12">
                                          <label class="form-label">Estado</label>

                                                        <label class="form-label"></label>
                                                        <select class="form-control custom-select" name="Estado" id="Estado" >
                                                            <option value="1">Activo</option>
                                                            <option value="0">Inactivo</option>
                                                        </select>   
                                                    </div>

                                </div>
                             
                                                </br></br>

                                <button type="submit"  class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                                
                            </div>
                            </form>                
                            
                            
                         
                        </div>
                    </div>
                </div><!-- /.modal -->


    <!-- EDITAR CURSOS INSCRITOS -->
    <div id="editar-asignar-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Content is Responsive</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-horizontal form-material" action="" id="form-asignar-editar">
                <input type="hidden" value="" name="IdCursoUsuario" id="IdCursoUsuario"/>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Elegir Usuario</label>
                            <select class="form-control custom-select" required name="IdUsuarioDNI" id="IdUsuarioDNI">
                                <option value="">Seleccione</option>
                                <?php foreach ($registroAct as $reg) { ?>
                                    <option value="<?php echo $reg->DNI ?>"><?php echo $reg->DNI ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Elegir Curso</label>
                            <select class="form-control custom-select" required name="IdCurso" id="IdCurso">
                                <option value="">Seleccione</option>
                                <?php foreach ($cursoAct as $cur) { ?>
                                    <option value="<?php echo $cur->IdCurso ?>"><?php echo $cur->NombreCurso ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Elegir Rol</label>
                            <select class="form-control custom-select" required name="IdRol" id="IdRol">
                                <option value="">Seleccione</option>
                                <?php foreach ($rolAct as $rol) { ?>
                                    <option value="<?php echo $rol->IdRol ?>"><?php echo $rol->TipoRol ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Estado</label>
                            <label class="form-label"></label>
                            <select class="form-control custom-select" name="Estado" id="Estado">
                                <option value="1">Activo</option>
                                <option value="3">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    </br></br>
                    <button type="button" onclick="guardar_editado_asignacion()" class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
<div id="editar-actividad-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Content is Responsive</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-horizontal form-material" action="" id="form-actividad-editar">
                <input type="hidden" value="" name="IdActividad" id="IdActividad"/>
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
                            <select class="form-control custom-select" required name="IdCurso" id="IdCurso">
                                <option value="">Seleccione</option>
                                <?php foreach ($curso as $cur) {?>
                                    <option value="<?php echo $cur->IdCurso ?>"><?php echo $cur->NombreCurso ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                                </br>
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Elegir Nivel</label>
                            <select class="form-control custom-select" required name="IdNivel" id="IdNivel">
                                <option value="">Seleccione</option>
                                <?php foreach ($nivel as $niv) {?>
                                    <option value="<?php echo $niv->IdNivel ?>"><?php echo $niv->Nivel ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="mb-12">
                            <label class="form-label">Estado</label>
                            <label class="form-label"></label>
                            <select class="form-control custom-select" name="EstadoActividad" id="EstadoActividad">
                                <option value="1">Activo</option>
                                <option value="3">Inactivo</option>
                            </select>   
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-end mt-4">
                                <button type="button" onclick="guardar_editado_actividad()" class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->



<script src="<?php echo base_url() ?>assets/js/AdministradorPrincipal.js"></script>        
