$(document).ready(function() {
    $("#form-validar-profesor").submit(function(event) {
        event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
        ValidarUsuario();
    });
});

function ValidarUsuario() {
    var DNI = $('#DNI').val();
    var password = $('#password').val();
    var IdRegistro = $('#IdRegistro').val();
  
    if (DNI && password) {
      // console.log(Correo, password);
      $.ajax({
        url: 'LoginProfesorController/ValidarUsuario',
        type: 'GET',
        data: { DNI: DNI, password: password, IdRegistro:IdRegistro },
        dataType: 'json',
        success: function (data) {
          if (data.error) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: data.error
            });
          } else {
          
            window.location.href = "principalprofesor";
          }
        },
        error: function (xhr, textStatus, errorThrown) {
          console.error('Error al buscar el Correo electrónico: ' + textStatus + ' (' + errorThrown + ')');
        }
      });
    }
  }
  

  