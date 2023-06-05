$(document).ready(function() {
    $("#form-agregar-mensaje").submit(function(event) {
      event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
      GuardarMensaje(); // Llamar a la función "save_Edicion()"
  
  
    });
  });


function GuardarMensaje() {
    var url;
    var idUsuario = $('#txt_usuario').text().trim();
    console.log(idUsuario);
    
    url = "MensajeController/GuardarMensaje/" + idUsuario;
  
    $.ajax({
      url: url,
      type: "POST",
      data: $('#form-agregar-mensaje').serialize(),
      dataType: "JSON",
      success: function(data) {
        if (data.error) {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: data.error
          });
        } else {
          Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Correo enviado correctamente'
          }).then(function() {
            location.reload();
          });
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Error al guardar el registro'
        });
      }
    });
  }
