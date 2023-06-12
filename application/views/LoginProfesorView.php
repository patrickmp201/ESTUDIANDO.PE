
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

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                       
                                    <p class="text-muted mb-4 mt-3">Ingrese su documento de identidad y contraseña para acceder al panel de administración.</p>
                                </div>

                                <form id="form-validar-profesor">
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">DNI</label>
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

                                <!-- <div class="row-6" style="text-align: center;">
                                    <a href="login" class="text-muted"><small>ALUMNO</small></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="recuperar" class="text-muted"><small>ADMINISTRADOR</small></a>
                                </div> -->
                            </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">Forgot your password?</a></p>
                                <p class="text-white-50">¿No tienes una cuenta?  <a href="registroprofesor" class="text-white ms-1"><b>Crear Usuario</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


    </body>
    <footer>
    <script src="<?php echo base_url() ?>assets/js/LoginProfesor.js"></script>      
</footer>
</html>