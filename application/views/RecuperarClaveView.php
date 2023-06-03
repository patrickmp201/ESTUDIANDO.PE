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

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                 

                        <!-- title-->
                        <h4 class="mt-0">Recuperar contraseña</h4>
                        <p class="text-muted mb-4">Ingrese su dirección de correo electrónico y le enviaremos un correo electrónico con instrucciones para restablecer su contraseña.</p>

                        <!-- form -->
                        <form id="form-recuperar">

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Correo Electrónico</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresar">
                            </div>

                            <div class="text-center d-grid">
                                <button class="btn btn-primary waves-effect waves-light" type="submit"> Restablecer la contraseña </button>
                            </div>

                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Back to <a href="login" class="text-muted ms-1"><b>Log in</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <div >
                    <div >
                    <img src="assets/images/fondo.jpeg" alt="" style="width: 136%; height: 100%; object-fit: cover;">
            <!-- height="1041" -->
                </div>
            </div>
        </div>


    </body>
    <footer>
    <script src="<?php echo base_url() ?>assets/js/RecuperarClave.js"></script>      
</footer>
</html>