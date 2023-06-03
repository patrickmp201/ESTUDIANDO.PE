$(document).ready(function() {
    $("#form-registro").submit(function(event) {
      event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
      save_Registro(); // Llamar a la función "save_Registro()"
    });
  });
  
  function save_Registro() {
    var url;
    var id = $('#Id').val();
    console.log(id);
  
    url = 'RegistroController/guardar_Registro/' + id;
  
    $.ajax({
      url: url,
      type: "POST",
      data: $('#form-registro').serialize(),
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
            title: 'Guardado Correctamente!',
            text: '',
            timer: 1500,
            showConfirmButton: false
          }).then(function() {
            // Redirigir a la página de inicio de sesión
            window.location.href = "login";
          });
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'ERROR AL GUARDAR REGISTRO'
        });
      }
    });
  }
  

