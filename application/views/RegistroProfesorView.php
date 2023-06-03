<!DOCTYPE html>
<html lang="en" data-layout="horizontal" data-topbar-color="dark">


<head>

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
                                <div class="auth-brand">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <!-- <img src="assets/images/logo-dark.png" alt="" height="22"> -->
                                        </span>
                                    </a>

                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <!-- <img src="assets/images/logo-light.png" alt="" height="22"> -->
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">¿No tienes una cuenta? Crea tu cuenta, te llevará menos de un minuto</p>
                            </div>

                    <form id="form-registro-profesor">
                            
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nombres Completos</label>
                                <input class="form-control" type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Ingresa nombres completos" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="Correo" name="Correo" required placeholder="Ingresa correo">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                <input type="password" id="Password" name="Password" class="form-control" placeholder="Ingresar contraseña">
                                <div class="input-group-text" data-password="false">
                                    <i class="fe-eye"></i>
                                </div>
                            </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="celular" class="form-label">Celular</label>
                                <input class="form-control" type="text" id="Celular" name="Celular" placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input class="form-control" type="text" id="DNI"  name="DNI" placeholder="Enter your DNI" required>
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
                            <div class="text-center d-grid">
                                <button class="btn btn-primary waves-effect waves-light" type="submit"> REGISTRAR </button>
                            </div>
                            <input type="hidden" id="Id" name="Id" value="">                          

                  </form>

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

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-white-50">Already have account? <a href="loginprofesor" class="text-white ms-1"><b>Sign In</b></a></p>
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
    <footer>
    <script src="<?php echo base_url() ?>assets/js/RegistroProfesor.js"></script>      
</footer>