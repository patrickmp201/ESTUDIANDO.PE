$(document).ready(function() {
    // Función para obtener el valor del ID de usuario y realizar la solicitud AJAX
    function Cursoinscritos() {
 
  
      $.ajax({
        type: 'POST',
        url: 'CursoProfesorController/Cursoinscritos/',
        async: true,
        dataType: 'json',
        // data: { idUsuario: idUsuario }, // Enviar el ID de usuario en los datos de la solicitud
        success: function(data) {
          let html = '';
          let i;
  
          for (i = 0; i < data.length; i++) {
            html +=
              '<tr>' +
              '<td style="text-align: center;">' + data[i].IdCurso + '</td>' +
              '<td style="text-align:center;">' +
              '<a href="javascript:;" style="text-decoration: underline; color: #6c757d;" title="Detalles" data="'+data[i].NombreCurso+'" id="CursoPopUp" >' + data[i].NombreCurso +
              '</a>' +
          '</td>' +
              '<td style="text-align: center;">' + data[i].Estado + '</td>' +
              '<td style="text-align: center;"><button type="button" data-toggle="tooltip" data-original-title="Eliminar" class="btn btn-sm waves-effect waves-light btn-danger" onclick="eliminar(' + data[i].IdCurso + ')"><i class="ti-trash" aria-hidden="true"></i></button></td>' +
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
  
  $(document).on('click', '#CursoPopUp', function() {

    let NombreCurso=$(this).attr('data');
    // console.log(NombreCurso);
    $('#CursoModal').modal('show');

    //console.log(CodigoContrato);
    if ($.fn.dataTable.isDataTable("#TablaparaPopUpCurso")) {       
        $("#TablaparaPopUpCurso").DataTable().destroy();}
		$.ajax({
			type : "POST",
      url: 'CursoProfesorController/listadoCurso/',
      data: {NombreCurso:NombreCurso },
            dataType: "JSON",
			success: function(data){
				//console.log(data);

	
					let html = '';
					let i;           
					
					for(i=0; i<data.length; i++)
					{
						
	
						html += 
								'<tr>'+                                 
									'<td style="text-align: center;">'+data[i].IdRespuesta+'</td>'+
									'<td style="text-align: center;">'+data[i].NombreActividad +'</td>'+
									'<td style="text-align: center;">'+data[i].Enunciado+'</td>'+
                  '<td style="text-align: center;">'+data[i].Nivel+'</td>'+
                  '<td style="text-align: center;">'+data[i].NombreCurso+'</td>'+
                  '<td style="text-align: center;">'+data[i].Respuesta+'</td>'+
                    
								'</tr>';
					}
					// console.log(html);
					$('#listarDetalleCurso').html(html);					
					$(document).ready(function() {
						$("#TablaparaPopUpCurso").DataTable({
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
						
					
					});
			
			}
		});
		return false;
		

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
    // var idUsuario = $('#txt_usuario').text().trim();
    
    url = "CursoProfesorController/GuardarCurso/";
  
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
  

  function agregar_Actividad(){
    // $('#form-marca')[0].reset();
            
      $('#agregar-actividad-modal').modal('show');
    $('.modal-title').text('Agregar Actividad'); // mostrar titulo de modal
  }
  
  
  $(document).ready(function() {
    $("#form-agregar-actividad").submit(function(event) {
      event.preventDefault(); // Prevenir que el formulario se envíe automáticamente
      GuardarActividad(); // Llamar a la función "save_Edicion()"
  
  
    });
  });
  

  function GuardarActividad() {
    var url;
    // var idUsuario = $('#txt_usuario').text().trim();
    
    url = "CursoProfesorController/GuardarActividad/";
  
    $.ajax({
      url: url,
      type: "POST",
      data: $('#form-agregar-actividad').serialize(),
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
  






  function eliminar(IdCurso) {
    event.preventDefault();
    
    var url = 'CursoProfesorController/BorrarCurso/' + IdCurso;
  console.log(IdCurso);
  
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
  function Ver_Calificaciones() {
    $('#DocumentoModal').modal('show');
    $('.modal-title').text('Calificaciones');
    Calificaciones(); // Llamar a la función "Calificaciones()"
  }
  
  function Calificaciones() {
    if ($.fn.dataTable.isDataTable("#TablaparaPopUpDocumento")) {
      $("#TablaparaPopUpDocumento").DataTable().destroy();
    }
  
    $.ajax({
      type: "POST",
      url: 'CursoProfesorController/Calificaciones/',
      dataType: "JSON",
      success: function (data) {
        let html = '';
  
        for (let i = 0; i < data.length; i++) {
          html += '<tr>' +
            '<td style="text-align: center;">' + data[i].IdRespuestaAlumno + '</td>' +
            '<td style="text-align: center;">' + data[i].NombreActividad + '</td>' +
            '<td style="text-align: center;">' + data[i].Enunciado + '</td>' +
            '<td style="text-align: center;">' + data[i].RespuestaSeleccionada + '</td>' +
            '<td style="text-align: center;">' + data[i].IdUsuarioDNI + '</td>' +
            '</tr>';
        }
  
        $('#listarDetalleDocumento').html(html);
  
        $("#TablaparaPopUpDocumento").DataTable({
          language: {
            paginate: {
              previous: "<i class='mdi mdi-chevron-left'></i>",
              next: "<i class='mdi mdi-chevron-right'></i>"
            }
          },
          drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
          }
        });
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
  