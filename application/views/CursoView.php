<script src="<?php echo base_url() ?>assets/js/Curso.js"></script>        

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
                                    </div>
                            <h4 class="header-title" style="text-align: center;font-size:50px">CURSOS INSCRITOS</h4>
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


<!-- <script src="<?php echo base_url() ?>assets/js/Curso.js"></script>        

<div class="content-page" style="padding: 18px;">

<h1 class="display-1" style="text-align: Center;">Bienvenido Alumno!</h1>

<div class="btn-group" role="group">
  <button type="button" class="btn btn-primary" id="btn-matematica">Matemática</button>
  <button type="button" class="btn btn-primary" id="btn-comunicaciones">Comunicaciones</button>
</div>
</br></br></br>
<div class="row" id="matematica-cards">
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/algebra.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;" >ÁLGEBRA</h5>
                        <p class="card-text"style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid"  style="width: 100%; height: 400px;" src="assets/images/geometria.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">GEOMETRÍA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/trigonometria.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">TRIGONOMETRÍA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/arimetica.png" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">ARÍMETICA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/razonamiento.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">RAZONAMIENTO MATEMÁTICO</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/fisica.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">FÍSICA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LÓGICA DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    </div>


<div class="row" id="comunicaciones-cards">
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid" style="width: 100%; height: 400px;" src="assets/images/literatura2.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">LITERATURA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DE DEL LENGUAJE  DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid"  style="width: 100%; height: 400px;" src="assets/images/arteycultura2.jpg" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">ARTE Y CULTURA</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DEL LENGUAJE  DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <a href="dificultad">
                    <img class="card-img-top img-fluid"  style="width: 100%; height: 400px;" src="assets/images/comunicacion2.jpg" alt="Card image cap">
                </a>
                    3<div class="card-body">
                        <h5 class="card-title" style="text-align: center;">COMUNICACIÓN</h5>
                        <p class="card-text" style="text-align: center;">CURSO ESPECIALIZADO EN EL DESARROLLO DEL LENGUAJE DE LOS ALUMNOS</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>

</div> -->