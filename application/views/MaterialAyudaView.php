<style>
.carousel-control-prev-icon, .carousel-control-next-icon {
  background-color: #103965;
}

.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
  background-color: #103965;
}

</style>

<div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Metadata</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Test</a></li>
                                <li class="breadcrumb-item active">Inicio</li>
                            </ol>
                        </div>
                        <h4 class="page-title" style='font-family: "Bauhaus Bugler W00 Medium" !important; font-size: 1.55rem !important;'>¡ BIENVENIDOS ! <img src="../metadata/images/flex_fortel/like.gif" width="55" /></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card-body">
                            
                            <div class="row">
                            <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                                <!-- new post -->
                                <div class="card">
                                    <div class="card-body p-0">
                                        <ul class="nav nav-tabs nav-bordered">
                                            <li class="nav-item">
                                                <a href="#newpost" data-bs-toggle="tab" aria-expanded="false" class="nav-link active px-3 py-2">
                                                    <i class="mdi mdi-pencil-box-multiple font-18 d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Subir material con Imagenes</span>
                                                </a>
                                            </li>
                                       
                                            <li class="nav-item">
                                                <a href="#newpostvideo" data-bs-toggle="tab" aria-expanded="false" class="nav-link  px-3 py-2">
                                                    <i class="mdi mdi-pencil-box-multiple font-18 d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Subir material con Videos</span>
                                                </a>
                                            </li>
                                            
                                            
                                        </ul> <!-- end nav-->
                                        <div class="tab-content pt-0">
                                            <div class="tab-pane show active p-3" id="newpost">
                                                <!-- comment box -->
                                                <div class="border rounded">
                                                    <form id="cargar-img"  name="cargar-img" action="<?php echo base_url(); ?>MaterialAyudaController/guardar_imagen" method="post" enctype="multipart/form-data" class="comment-area-box">
                                                        <textarea rows="4" id="comentario" name="comentario" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <i class="mdi mdi-image-outline"></i><input type="file" name="imagenes[]" multiple> 
                                                            </div>
                                                            <button type="submit" class="btn btn-sm btn-success"><i class='mdi mdi-send-outline me-1'></i>Publicar</button>
                                                        </div>
                                                    </form>
                                                </div> <!-- end .border-->
                                                <!-- end comment box -->
                                            </div> <!-- end preview-->
                                            <div class="tab-pane show  p-3" id="newpostvideo">
                                                <!-- comment box -->
                                                <div class="border rounded">
                                                    <form id="cargar-vid"  name="cargar-vid" action="<?php echo base_url(); ?>MaterialAyudaController/guardar_video" method="post" enctype="multipart/form-data" class="comment-area-box">
                                                        <textarea rows="4" id="descvideo" name="descvideo" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                                <div>
                                                                <i class="mdi mdi-video"></i>Link del video<input type="texr" name="linkvideo" id="linkvideo" > 
                                                            </div>
                                                            <button type="submit" class="btn btn-sm btn-success"><i class='mdi mdi-send-outline me-1'></i>Post</button>
                                                        </div>
                                                    </form>
                                                </div> <!-- end .border-->
                                                <!-- end comment box -->
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div>
                                </div>
                                    
                                    <!-- <div class="card">
                                        <div class="card-body">
                                            
                                        </div>
                                    </div> -->
                                    <div id="parentElementId">
                                        

                                    </div>
                                    <div id="container">

                                    </div>
                                    
                               
                                    <!-- <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">With indicators</h4>
                                            <p class="sub-header">You can also add the indicators to the
                                                carousel, alongside the controls, too.</p>

                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="./assets/images/socialfex/anuncio09.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="./assets/images/socialfex/anuncio19.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="./assets/images/socialfex/anuncio29.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div> -->
                                    <div id="verMasButton"></div>
                                    <!-- <button id="verMasButton" style="display: none;">Ver más</button> -->
                                    
                            </div>
             
                        </div>
                    </div>   
                 </div>
            </div>





         </div>
</div>





<script src="<?php echo base_url() ?>assets/js/MaterialAyuda.js"></script>        
