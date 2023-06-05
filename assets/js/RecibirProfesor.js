
$(document).ready(function() {
    // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
    function RecibirCorreo() {
      // Obtener el valor del ID de usuario del elemento con id "txt_dni"
      var idUsuario = $('#txt_usuario').text().trim();
      console.log(idUsuario);
  
      $.ajax({
        type: 'POST',
        url: 'RecibirProfesorController/RecibirCorreo/' + idUsuario,
        async: true,
        dataType: 'json',
        // data: { idUsuario: idUsuario }, // Enviar el ID de usuario en los datos de la solicitud
        success: function(data) {
            // console.log(data);
          let html = '';
          let i;
  
          for (i = 0; i < data.length; i++) {
            html +=
              '<tr>' +
              '<td style="text-align: center;">' + data[i].IdCorreo + '</td>' +
              '<td style="text-align: center;">' + data[i].De + '</td>' +
              '<td style="text-align: center;">' + data[i].Para + '</td>' +
              '<td style="text-align: center;">' + data[i].NombreCurso + '</td>' +
              '<td style="text-align: center;">' + data[i].Asunto + '</td>' +
              '<td style="text-align: center;">' + data[i].Cuerpo + '</td>' ;



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
    RecibirCorreo();
  });
  