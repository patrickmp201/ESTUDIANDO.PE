


$(document).ready(function() {
    // Función para obtener el valor del ID de usuario y mostrar el formulario
    function RegistroEditar() {
      // Obtener el valor del ID de usuario del elemento con id "txt_usuario"
      var idUsuario = $('#txt_usuario').text().trim();
  
      $.ajax({
        type: 'POST',
        url: 'EditarController/RegistroEditar',
        data: { idUsuario: idUsuario },
        async: true,
        dataType: 'json',
        success: function(data) {
          let html = '';
  
          html += '<input type="hidden" value="' + data[0].IdRegistro + '" name="IdRegistro" id="IdRegistro">';
          html += '<form id="form-registro-editar">';
          html += '<form id="form-registro-editar">';
          html += '<div class="mb-3">';
          html += '<label for="fullname" class="form-label">Nombres Completos</label>';
          html += '<input class="form-control" type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Ingresa nombres completos"  value="' + data[0].NombreCompleto + '" required>';
          html += '</div>';
          html += '<div class="mb-3">';
          html += '<label for="fullname" class="form-label">Nombres Completos</label>';
          html += '<input class="form-control" type="text" id="Correo" name="Correo"placeholder="Ingresa correo" value="' + data[0].Correo + '" required>';
          html += '</div>';
          html += '<div class="mb-3">';
          html += '<label for="password" class="form-label">Password</label>';
          html += '<div class="input-group input-group-merge">';
          html += '<input type="password" id="Password" name="Password" class="form-control" placeholder="Ingresar contraseña" value="' + data[0].Password + '"  required>';
          html += '<div class="input-group-text" data-password="false">';
          html += '<i class="fe-eye"></i>';
          html += '</div>';
          html += '</div>';
          html += '</div>';
          html += '<div class="mb-3">';
          html += '<label for="celular" class="form-label">Celular</label>';
          html += '<input class="form-control" type="text" id="Celular" name="Celular" placeholder="Ingresa número" value="' + data[0].Celular + '" required>';
          html += '</div>';
          html += '<div class="mb-3">';
          html += '<label for="dni" class="form-label">DNI</label>';
          html += '<input class="form-control" type="text" id="DNI" name="DNI" placeholder="Ingresa DNI" value="' + data[0].DNI + '" required>';
          html += '</div>';
  
          html += '<div class="text-center d-grid">';
          html += '<button class="btn btn-primary waves-effect waves-light" type="submit" id="btn-guardar">GUARDAR</button>';
          html += '</div>';
  
          html += '</form>';
  
          $('#formularioEditar').html(html);
        }
      });
    }
  
    // Llamar a la función RegistroEditar al cargar la página
    RegistroEditar();
  
    // Asignar el evento click al botón de guardar
    $('#formularioEditar').on('submit', function(event) {
      event.preventDefault(); // Evitar el envío del formulario
      GuardarCurso();
    });
  });
  
  // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
  function GuardarCurso() {
    var id = $('#IdRegistro').val();
    console.log(id);
  
    var url = "EditarController/GuardarRegistro/" + id;
  
    $.ajax({
      url: url,
      type: "POST",
      data: $('#form-registro-editar').serialize(),
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
            text: 'Datos guardados correctamente'
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
  