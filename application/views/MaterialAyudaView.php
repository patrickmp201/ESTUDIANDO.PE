<div style="padding: 70px;">


        <!-- PARA CARGAR EL MATERIAL  -->
        <h1 style="text-align: center; font-weight: bold; font-style: italic;">MATERIAL DE AYUDA</h1>





        <div class="tab-pane show p-3" id="">
                <div class="border rounded">
                <form id="form-agregar-material" name="cargar-vid" action="" method="post" enctype="multipart/form-data" class="comment-area-box">
                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                    <textarea rows="4" id="Comentarios" name="Comentarios" class="form-control border-0 resize-none" placeholder="Cuéntanos tu logro..."></textarea>
                    </div>
                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                     <div>
                                <label for="Imagen">Imagen:</label>
                                <input type="file" id="uploads" name="uploads"  class="form-control-file">
                            </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-send-outline me-1"></i>Publicar</button>
                    </div>
                    <input type="hidden" value="" name="txt_usuario" id="txt_usuario"/>
                    <!-- <input type="hidden" value="" name="IdMaterialAyuda" id="IdMaterialAyuda"/> -->


                </form>
                </div>
            </div>

            
        <!-- <div class="tab-pane show p-3" id="guardarMaterial">
                <div class="border rounded">
                    <form id="form-agregar-material" name="cargar-vid" action="" method="post" enctype="multipart/form-data" class="comment-area-box">
                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                            <textarea rows="4" id="Comentarios" name="Comentarios" class="form-control border-0 resize-none" placeholder="Compartir material..."></textarea>
                        </div>
                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                       
                        
                            <button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-send-outline me-1"></i>Publicar</button>
                        </div>
                        <input type="hidden" value="" name="txt_usuario" id="txt_usuario"/>
                    </form>
                </div> -->
                    
            <!-- </div>accept="image/*" -->

            
            <!-- PARA MOSTRAR EL MATERIAL  -->
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                    
                            <h4 class="header-title" style="text-align: center;font-size:50px"></h4>
                            <br>
                            <div class="table-responsive">
                                <table id="tablaCurso" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Sugerencias</th>
                                            <th style="text-align: center;">Usuario</th>
                                            <th style="text-align: center;">Like</th>

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



<script src="<?php echo base_url() ?>assets/js/MaterialAyuda.js"></script>        
