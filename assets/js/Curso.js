$(document).ready(function() {
  // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
  function Cursoinscritos() {
    // Obtener el valor del ID de usuario del elemento con id "txt_dni"
    var idUsuario = $('#txt_usuario').text().trim();
    console.log(idUsuario);

    $.ajax({
      type: 'POST',
      url: 'CursoController/Cursoinscritos/' + idUsuario,
      async: true,
      dataType: 'json',
      // data: { idUsuario: idUsuario }, // Enviar el ID de usuario en los datos de la solicitud
      success: function(data) {
        let html = '';
        let i;

        for (i = 0; i < data.length; i++) {
          html +=
            '<tr>' +
            '<td style="text-align: center;">' + data[i].IdCursoUsuario + '</td>' +
            '<td style="text-align: center;">' + data[i].NombreCurso + '</td>' +
            '<td style="text-align: center;">' + data[i].Correo + '</td>' +
            '<td style="text-align: center;">' + data[i].Estado + '</td>' +
            '<td style="text-align: center;"><button type="button" data-toggle="tooltip" data-original-title="Eliminar" class="btn btn-sm waves-effect waves-light btn-danger" onclick="eliminar(' + data[i].IdCursoUsuario + ')"><i class="ti-trash" aria-hidden="true"></i></button></td>' +
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
  Cursoinscritos();
});





function agregar_curso(){
  // $('#form-marca')[0].reset();
          
    $('#agregar-curso-modal').modal('show');
  $('.modal-title').text('Agregar Curso'); // mostrar titulo de modal
}


$(document).ready(function() {
  $("#form-agregar-curso").submit(function(event) {
    event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
    GuardarCurso(); // Llamar a la función "save_Edicion()"


  });
});

function GuardarCurso() {
  var url;
  var idUsuario = $('#txt_usuario').text().trim();
  
  url = "CursoController/GuardarCurso/" + idUsuario;

  $.ajax({
    url: url,
    type: "POST",
    data: $('#form-agregar-curso').serialize(),
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


function eliminar(IdCursoUsuario) {
  event.preventDefault();
  
  var url = 'CursoController/BorrarCurso/' + IdCursoUsuario;
// console.log(IdCursoUsuario);

  Swal.fire({
    title: "¿Está seguro?",
    text: "No podrá recuperar el registro una vez sea eliminado!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Si, Eliminarlo!',
    cancelButtonText: "No, Cancelar!",
    confirmButtonClass: "btn-danger",
    closeOnConfirm: true,
    closeOnCancel: true
  }).then(function(result) {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Eliminado!",
        text: "El registro ha sido eliminado!",
        icon: "success"
      }).then(function() {
        window.location.replace(url);
      });
    } else {
      Swal.fire("Cancelado", "El registro está a salvo! :)", "error");
    }
  });
}
