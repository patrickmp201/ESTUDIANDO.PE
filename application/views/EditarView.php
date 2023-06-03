
<!DOCTYPE html>
<html lang="en" data-layout="horizontal" data-topbar-color="dark">

    <!-- <head>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<script src="assets/js/head.js"></script>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  />

		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

		<link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
    </head> -->

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

              

                        <!-- title-->
                        <h4 class="mt-0">Edita tus datos!</h4>
                        <p class="text-muted mb-4">¿Quieres modificar tus datos? Recuerda que podrás modificarlos cuando quieras</p>
                        <div id="formularioEditar" >
                        <!-- form -->
                                <form id="form-registro-editar" action="">
                                <input type="hidden" value="" name="IdRegistro" id="IdRegistro" />
                            
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nombres Completos</label>
                                        <input class="form-control" type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Ingresa nombres completos"  value="" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="Correo" name="Correo"  placeholder="Ingresa correo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                        <input type="password" id="Password" name="Password" class="form-control" placeholder="Ingresar contraseña" required>
                                        <div class="input-group-text" data-password="false">
                                            <i class="fe-eye"></i>
                                        </div>
                                    </div>
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="celular" class="form-label">Celular</label>
                                        <input class="form-control" type="text" id="Celular" name="Celular" placeholder="Ingresa número" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dni" class="form-label">DNI</label>
                                        <input class="form-control" type="text" id="DNI"  name="DNI" placeholder="Ingresa DNI" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Colegio Procedencia</label>
                                            <select class="form-control custom-select"    name="IdColegioProcedencia" id="IdColegioProcedencia" required>
                                                <option value="">Seleccione</option>                                                
                                            <?php foreach ($colegio as  $cole) {?>
                                                <option value="<?php  echo $cole->IdColegioProcedencia ?>"><?php  echo $cole->NombreColegio ?></option>                                                
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Grado</label>
                                            <select class="form-control custom-select"  name="IdGrado" id="IdGrado"  required>
                                                <option value="">Seleccione</option>                                                
                                            <?php foreach ($grado as  $grad) {?>
                                                <option value="<?php  echo $grad->IdGrado ?>"><?php  echo $grad->NombreGrado ?></option>                                                
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                                        <input class="form-control" type="date" id="FechaNacimiento" name="FechaNacimiento" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                        <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <!-- <div class="text-center d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit"> REGISTRARSE </button>
                                    </div> -->
                                    
                                    
                                    <!-- <button type="button" onclick="GuardarCurso()" class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button> -->
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"> Guardar </button>



                                </form>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Sign in with</p>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="fe-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fe-mail"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fe-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fe-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Already have account? <a href="login" class="text-muted ms-1"><b>Log In</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>

                <div >
                    <div >
                    <img src="assets/images/fondo.jpeg" alt="" style="width: 150%; height: 100%; object-fit: cover;">
            <!-- height="1041" -->
                </div>
            </div>
        </div>


    </body>

    <footer>
    <script src="<?php echo base_url() ?>assets/js/Editar.js"></script>      
</footer>
</html>


