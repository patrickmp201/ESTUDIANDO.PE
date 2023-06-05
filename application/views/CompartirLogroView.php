<div style="padding: 70px;">


        <!-- PARA CARGAR LOS LOGROS  -->
        <h1 style="text-align: center; font-weight: bold; font-style: italic;">COMPARTIR LOGRO</h1>


            <div class="tab-pane show p-3" id="guardarlogro">
                <div class="border rounded">
                <form id="form-agregar-logro" name="cargar-vid" action="" method="post" enctype="multipart/form-data" class="comment-area-box">
                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                    <textarea rows="4" id="Comentarios" name="Comentarios" class="form-control border-0 resize-none" placeholder="Cuéntanos tu logro..."></textarea>
                    </div>
                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                    <div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-send-outline me-1"></i>Publicar</button>
                    </div>
                    <input type="hidden" value="" name="txt_usuario" id="txt_usuario"/>
                </form>
                </div>
            </div>

            
            <!-- PARA MOSTRAR LOS LOGROS  -->
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
                                            <th style="text-align: center;">Comentarios</th>
                                            <th style="text-align: center;">Usuario</th>
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



<script src="<?php echo base_url() ?>assets/js/CompartirLogro.js"></script>        
