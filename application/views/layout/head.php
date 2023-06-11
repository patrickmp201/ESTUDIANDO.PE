<!DOCTYPE html>
<html lang="en">    

<head>  
        
          
        <meta charset="utf-8" />
        <title>Estudiando</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
     
       

        <!--nuevos-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




        <!-- Agregue esto en la sección head del documento HTML -->
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
        
        <link href="<?= base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />


        


        <!-- plugin css -->
        <link href="<?= base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- select2 -->
        <link href="assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap css -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css"/>
        <!-- icons -->
        <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?= base_url(); ?>assets/css/style.min.css" rel="stylesheet" type="text/css" /> -->



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
        

        <!-- Head js -->
        <script src="<?= base_url(); ?>assets/js/head.js"></script>

        

    </head>
    
<style>
.bootbox-close-button{
margin-top: -10px;
display: none !important;
}

code {
    color: var(--ct-code-color) !important;
    word-wrap: break-word;
}
</style>

    <!-- body start -->
    <body data-theme="light" data-layout-mode="horizontal" data-topbar-color="dark" data-menu-position="fixed">

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            
            <script>
        $(document).ready(function() {
            // Obtener el valor de la cookie
            var cookieUser = getCookie('cookie_user');

            // Mostrar el correo del usuario en el elemento HTML correspondiente
            $('#txt_usuario').html(cookieUser);
        });

        // Función para obtener el valor de una cookie por su nombre
        function getCookie(cookieName) {
            var name = cookieName + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');
            for (var i = 0; i < cookieArray.length; i++) {
                var cookie = cookieArray[i];
                while (cookie.charAt(0) == ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) == 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return "";
        }
    </script>
<div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">


                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/images/users/user-2.jpg" alt="user-image" class="rounded-circle">
                                <!-- <span class="pro-user-name ms-1"><span id="txt_usuario" style="font-size: 15px;"></span></h6> -->
                                     <label id="txt_usuario" name="txt_usuario"></label><i class="mdi mdi-chevron-down"></i> 

                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome! 
                                <span id="txt_nombre" style="font-size: 11px;"></span>
                            </div>

                                    <!-- item-->
                                <a href="editar" class="btn_account dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
                                
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="login" class="btn_logout dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
                   
    
                    <!-- LOGO -->
                    <!-- <div class="logo-box logo-margen">
                        <a href="activo">
                            <span class="logo-sm">
                                <img src="<?= base_url(); ?>assets/images/logoFortel.png" alt="" height="30" left="30px">
                            </span>
                        </a>
                    </div> -->

<!-- Servidesk -->      
                    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
                    
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Menu
                                <i class="mdi mdi-chevron-down"></i> 
                            </a>

                            
                            <div class="dropdown-menu">
                               

                    <!-- item-->
                    <a href="<?php echo base_url('principal') ?>" class="dropdown-item">
                                    <i class="mdi mdi-archive-arrow-down"></i> &nbsp
                                    <span>Página Principal</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url('perfil') ?>" class="dropdown-item">
                                    <i class="fe-user"></i> &nbsp
                                    <span>Perfil</span>
                                </a>
                                <a href="<?php echo base_url('curso') ?>" class="dropdown-item">
                                    <i class="mdi mdi-archive-arrow-down"></i> &nbsp
                                    <span>Cursos</span>
                                </a>
                                <!-- <a href="<?php echo base_url('materialvideo') ?>" class="dropdown-item">
                                    <i class="mdi mdi-video"></i> &nbsp
                                    <span>Videos de Ayuda</span>
                                </a> -->
                                <a href="<?php echo base_url('material') ?>" class="dropdown-item">
                                    <i class="mdi mdi-video"></i> &nbsp
                                    <span>Material de Ayuda</span>
                                </a>
                            
                                <a href="<?php echo base_url('contact') ?>" class="dropdown-item">
                                    <i class="mdi mdi-contacts"></i> &nbsp
                                    <span>Contáctanos</span>
                                </a>

                                <a href="<?php echo base_url('logro') ?>" class="dropdown-item">
                                    <i class="mdi mdi-medal"></i> &nbsp
                                    <span>Compartir logro</span>
                                </a>
                                <a href="<?php echo base_url('rankings') ?>" class="dropdown-item">
                                    <i class="mdi mdi-archive-arrow-down"></i> &nbsp
                                    <span>Ranking</span>
                                </a>
                

    
                            </div>
                        </li>
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Correo
                                <i class="mdi mdi-chevron-down"></i> 
                            </a>

                            
                            <div class="dropdown-menu">
                               

                    <!-- item-->
                         <a href="<?php echo base_url('mensaje') ?>" class="dropdown-item">
                                    <i class="mdi mdi-email-send"></i> &nbsp
                                    <span>Enviar</span>
                                </a>
                                <a href="<?php echo base_url('recibir') ?>" class="dropdown-item">
                                    <i class="mdi mdi-email-receive"></i> &nbsp
                                    <span>Recibir</span>
                                </a>

                       
                             

    
                            </div>
                        </li>
                        
                        </ul>

</div>
</div> <!-- end Topbar -->

          

          