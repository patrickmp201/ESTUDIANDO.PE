<div style="padding: 80px;">


        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Enviar mensaje</h5>
            <form id="form-agregar-mensaje" action="" method="POST">
                    <div class="form-group">

                            <div class="mb-12">
                                <label class="form-label">Elegir Profesor</label>
                                    <select class="form-control custom-select"   required name="IdRegistroProf" id="IdRegistroProf" value="" >
                                        <option value="">Seleccione</option>                                                
                                    <?php foreach ($profesor as  $prof) {?>
                                        <option value="<?php  echo $prof->IdRegistro ?>"><?php  echo $prof->NombreCompleto ?></option>                                                
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                
                    <div class="form-group">
                                <div class="mb-12">
                                <label class="form-label">Elegir Curso</label>
                                <select class="form-control custom-select"   required name="IdCurso" id="IdCurso" >
                                    <option value="">Seleccione</option>                                                
                                <?php foreach ($curso as  $cur) {?>
                                    <option value="<?php  echo $cur->IdCurso ?>"><?php  echo $cur->NombreCurso ?></option>                                                
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input type="text" class="form-control" id="Asunto" name="Asunto" required>
                    </div>
                    <div class="form-group">
                        <label for="texto">Redactar:</label>
                        <textarea class="form-control" id="Cuerpo" name="Cuerpo" rows="5" required></textarea>
                    </div>
                    </br>
                    <button type="submit" class="btn btn-primary">Enviar</button>

                    <input type="hidden" value="" name="txt_usuario" id="txt_usuario"/>

            </form>
        </div>
        </div>
</div>


<script src="<?php echo base_url() ?>assets/js/Mensaje.js"></script>        
