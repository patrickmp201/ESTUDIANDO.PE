<div  style="padding: 63px;">

    <div class="tab-pane show p-3" id="newpostvideo">
        <!-- comment box -->
        <div class="border rounded">
            <form id="cargar-vid" name="cargar-vid" action="<?php echo base_url('VideosAyudaController/guardar_video'); ?>" method="post" enctype="multipart/form-data" class="comment-area-box">
                <textarea rows="4" id="descvideo" name="descvideo" class="form-control border-0 resize-none" placeholder="Escribe algún comentario...."></textarea>
                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                    <div>
                        <i class="mdi mdi-video"></i>Link del video <input  type="text" name="linkvideo" id="linkvideo">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-send-outline me-1"></i>Post</button>
                </div>
            </form>
        </div> <!-- end .border-->
        <!-- end comment box -->
    </div>
</div>
<!-- <button id="verMasButton" style="">Ver más</button> -->

<div id="parentElementId">

</div>       

<script src="<?php echo base_url() ?>assets/js/VideosAyuda.js"></script>        
