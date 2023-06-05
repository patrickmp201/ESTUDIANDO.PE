$(document).ready(function() {
    $("#form-agregar-logro").submit(function(event) {
      event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
      GurdarLogro(); // Llamar a la función "save_Edicion()"
  
  
    });
  });


function GurdarLogro() {
    var url;
    var idUsuario = $('#txt_usuario').text().trim();
    
    url = "CompartirLogroController/GurdarLogro/" + idUsuario;
  
    $.ajax({
      url: url,
      type: "POST",
      data: $('#form-agregar-logro').serialize(),
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
            text: 'Logro compartido correctamente'
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
  
  $(document).ready(function() {
    // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
    function MostrarLogros() {
      // Obtener el valor del ID de usuario del elemento con id "txt_dni"
      var idUsuario = $('#txt_usuario').text().trim();
      console.log(idUsuario);
  
      $.ajax({
        type: 'POST',
        url: 'CompartirLogroController/MostrarLogros/' + idUsuario,
        async: true,
        dataType: 'json',
        // data: { idUsuario: idUsuario }, // Enviar el ID de usuario en los datos de la solicitud
        success: function(data) {
          let html = '';
          let i;
  
          for (i = 0; i < data.length; i++) {
            html +=
              '<tr>' +
              '<td style="text-align: center;">' + data[i].IdLogro + '</td>' +
              '<td style="text-align: center;">' + data[i].Comentarios + '</a></td>' +
              '<td style="text-align: center;">' + data[i].IdUsuarioDNI + '</td>' +
              '<td style="text-align: center;"><button type="button" data-toggle="tooltip" data-original-title="like" class="btn btn-outline-success rounded-pill waves-effect waves-light" onclick="like(' + data[i].IdLogro + ')"><i class="mdi mdi-hand-heart" aria-hidden="true"></i></button></td>' +

              '</tr>';
          }
  
          $('#curso-tabla').html(html);
  
          $("#tablaCurso").DataTable({
            language: {
              paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
              }
            },
            drawCallback: function() {
              $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
          });
        }
      });
    }
  
    // Llamar a la función Cursoinscritos al cargar la página
    MostrarLogros();
  });
  
  function like() {
    Swal.fire({
      title: 'Me gusta tu logro',
      text: '¡Has recibido un like en tu logro!',
      icon: 'success'
    });
  }
  