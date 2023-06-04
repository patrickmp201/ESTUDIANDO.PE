$(document).ready(function() {
  // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
  function Niveles() {
    // console.log('entra')
    // Obtener el valor del ID de usuario del elemento con id "txt_dni"
    var curso = $('#IdCurso').text().trim();
    var nivel = $('#IdNivel').text().trim();
  

    console.log(nivel);
    console.log(curso);

    $.ajax({
      type: 'POST',
      url: 'EleccionNivelController/Niveles/',
      async: true,
      dataType: 'json',
      data: { nivel: nivel, curso:curso }, // Enviar el ID de usuario en los datos de la solicitud
      success: function(data) {
        let html = '';
        let i;

        for (i = 0; i < data.length; i++) {
          html +=
            '<tr>' +
            '<td style="text-align: center;">' + data[i].IdActividad + '</td>' +
            '<td style="text-align: center;">' + data[i].NombreActividad+ '</a></td>' +
            '<td style="text-align: center;">' + data[i].Enunciado + '</td>' +
            '<td style="text-align: center;">' + data[i].NombreCurso + '</td>' +
            '<td style="text-align: center;">' + data[i].Nivel + '</td>' +

            '<td style="text-align: center;"><button type="button" data-toggle="tooltip" data-original-title="Resolver" class="btn btn-sm waves-effect waves-light btn-success" onclick="resolver(' + data[i].IdActividad + ')"><i class="mdi mdi-play" aria-hidden="true"></i></button></td>' +
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
  Niveles();
});

$(document).ready(function() {
  $("#form-agregar-curso").submit(function(event) {

// mostrar titulo de modal

    event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
    GuardarCurso(); // Llamar a la función "save_Edicion()"


  });
});

function resolver(){
  // $('#form-marca')[0].reset();
  $('#agregar-curso-modal').modal('show');
  $('.modal-title').text('Elegir una opción'); 
}


