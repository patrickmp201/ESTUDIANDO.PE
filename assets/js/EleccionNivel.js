$(document).ready(function() {
  // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
  function Niveles() {
    // console.log('entra')
    // Obtener el valor del ID de usuario del elemento con id "txt_dni"
    var curso = $('#IdCurso').text().trim();
    var nivel = $('#IdNivel').text().trim();
  

    // console.log(nivel);
    // console.log(curso);

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

            '<td style="text-align: center;"><button type="button" data-toggle="tooltip" data-original-title="Resolver" class="btn btn-sm waves-effect waves-light btn-success" onclick="Checklist(' + data[i].IdActividad + ')"><i class="mdi mdi-play" aria-hidden="true"></i></button></td>' +
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
function Checklist(IdActividad) {
  $('#checklist-close-modal').modal('show');
  console.log(IdActividad);

  // validarCheckboxSeleccionados(IdActividad);

  $('.modal-title').text('Seleccione la Marca');
  $('#form-checklist')[0].reset();

  $.ajax({
    url: "EleccionNivelController/checklist_componente/" + IdActividad,
    type: "GET",
    dataType: "JSON",
    success: function(data) {
      $('[name="IdResolucion"]').val(IdActividad);
      $('[name="IdAlternativa"]').val(IdAlternativa);


      var alternativasContainer = $('#alternativas-container');
      alternativasContainer.empty();

      data.forEach(function (alternativa) {
        console.log(alternativa);
        var checkboxId = 'ch' + alternativa.IdResolucion;
        var checkbox = $('<div class="form-check">' +
          '<input type="checkbox" class="form-check-input" id="' + checkboxId + '" value="' + alternativa.IdResolucion + '">' +
          '<label class="form-check-label" for="' + checkboxId + '">' + alternativa.Opciones + '</label>' +
          '</div>');
      
        alternativasContainer.append(checkbox);
      });
      

      // Guardar el objeto 'data' en un atributo de datos del modal
      $('#checklist-close-modal').data('alternatives', data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error(errorThrown);  // Imprimir el error en la consola para depuración
    }
  });
}
$(document).ready(function() {
  $("#btnGuardar").on("click", function () {
      var IdResolucion = $('#IdResolucion').val();
  
      var selectedAlternatives = [];
  
      $("input:checkbox:checked").each(function () {
          var alternativeId = $(this).val();
          var alternativeValue = $(this).siblings('label').text();
  
          selectedAlternatives.push({
              IdAlternativa: alternativeId,
              Opciones: alternativeValue
          });
      });
  
      if (selectedAlternatives.length === 0) {
          swal("Seleccione al menos una casilla", "", "warning");
      } else {
          guardar_marca_array(selectedAlternatives, IdResolucion);
      }
  });
  
  function guardar_marca_array(arr, IdResolucion) {
      var url ="EleccionNivelController/guardar_checklist_componente";
  
      $.ajax({
          url: url,
          type: "POST",
          data: { arr: arr, IdResolucion: IdResolucion },
          dataType: "JSON",
          success: function (data) {
              Swal.fire({
                  icon: "success",
                  title: "Guardado Correctamente!",
                  showConfirmButton: false,
                  timer: 1500
              }).then(function () {
                  location.reload();
              });
          },
          error: function (jqXHR, textStatus, errorThrown) {
              Swal.fire({
                  icon: "error",
                  title: "ERROR AL GUARDAR REGISTRO",
                  showConfirmButton: false,
                  timer: 1500
              });
          }
      });
  }
});


      // $('[name="IdResolucion"]').val(IdResolucion);
      // $('[name="IdAlternativa"]').val(IdAlternativa);


      // var alternativasContainer = $('#alternativas-container');
      // alternativasContainer.empty();

      // data.forEach(function (alternativa) {
      //   var checkbox = $('<div class="form-check">' +
      //     '<input type="checkbox" class="form-check-input" id="ch' + alternativa.IdAlternativa + '" value="' + alternativa.IdAlternativa + '">' +
      //     '<label class="form-check-label" for="ch' + alternativa.IdAlternativa + '">' + alternativa.Opciones + '</label>' +
      //     '</div>');

      //   alternativasContainer.append(checkbox);
      // });
