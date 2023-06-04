$(document).ready(function() {
    function Elegir() {
 
    //   console.log(Nivel1);
  
      $.ajax({
        type: 'POST',
        url: 'ElegirDificultadController/Elegir/' ,
        async: true,
        dataType: 'json',
        success: function(data) {
          let html = '';
          let i;
  
          for (i = 0; i < data.length; i++) {
            html +=
              '<tr>' +
              '<td style="text-align: center;">' + data[i].IdNivel + '</td>' +
              '<td style="text-align: center;"><a href="nivel">' + data[i].Nivel + '</a></td>' +
              '<td style="text-align: center;">' + data[i].Comentario + '</td>' ;

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
    Elegir();
  });
  
  