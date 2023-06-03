

<!DOCTYPE html>
<html lang="en" data-layout="horizontal" data-topbar-color="dark">

    <head>
        <meta charset="utf-8" />
        <title>Log In | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- Qjquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Theme Config Js -->
		<script src="assets/js/head.js"></script>

		<!-- Bootstrap css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  />

		<!-- App css -->
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                    
                    

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Ingrese su documento de identidad y contraseña para acceder a la cuenta.</p>


                        <!-- form -->
                        <form id="form-validar">
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Documento de Identidad</label>
                                    <input class="form-control" type="text" id="DNI" name="DNI" required="" placeholder="Ingresar su DNI">
                                </div>
                                <div class="mb-3">
                                    <a href="recuperar" class="text-muted float-end"><small>¿Olvidaste tu contraseña?</small></a>
                                    <label for="password" class="form-label">Contraseña</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Ingresar contraseña">
                                        <div class="input-group-text" data-password="false">
                                            <i class="fe-eye"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                        <label class="form-check-label" for="checkbox-signin">Recuérdame</label>
                                    </div>
                                </div>
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit">INGRESAR</button>
                                </div>
                                <input type="hidden" value="" name="IdRegistro" id="IdRegistro" />

                                <br />

                                <div class="row-6" style="text-align: center;">
                                    <a href="loginprofesor" class="text-muted"><small>PROFESOR</small></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="recuperar" class="text-muted"><small>ADMINISTRADOR</small></a>
                                </div>
                            </form>

                    

                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Sign in with</p>
                                <ul class="social-list list-inline mt-3">
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
                        <p class="text-muted">¿No tienes una cuenta? <a href="registro" class="text-muted ms-1"><b>Crear Usuario</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <div >
                <div >
                <img src="assets/images/fondo.jpeg" alt="" style="width: 150%; height: 100%; object-fit: cover;">
          <!-- height="1041" -->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

   
    </body>

    <footer>
    <script src="<?php echo base_url() ?>assets/js/Login.js"></script>      
</footer>
</html>