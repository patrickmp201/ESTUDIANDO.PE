tablaAlumno();

function tablaAlumno() {
		

	// if ($.fn.dataTable.isDataTable("#VistaPosicion")) {       
    //     $("#VistaPosicion").DataTable().destroy();}

    $.ajax({
      type:'POST',
      url:'AlumnosController/tablaAlumno',
      async: true,
      dataType:'json',
      success: function(data) {
        //console.log('entra2');
  
        let html = '';
        let i;
  
        for(i=0; i<data.length; i++) {
 

            html += 
            '<tr>'+                                 
                '<td style="text-align: center;">'+data[i].id+'</td>'+
                '<td style="text-align: center;">'+data[i].DNI+'</td>'+
                '<td style="text-align: center;">'+data[i].NOMBRE+'</td>'+
                '<td style="text-align: center;">'+data[i].CORREO+'</td>'+
                '<td style="text-align: center;">'+data[i].EDAD+'</td>'+
                '<td style="text-align: center;">'+data[i].GRADO+'</td>'+
                '<td style="text-align: center;">'+data[i].PASSWORD+'</td>' +
                '<td style="text-align: center;">'+data[i].TELEFONO+'</td>';




            }
  
            $('#alumnos-tabla').html(html);
            $(document).ready(function() {
                $("#tablaalumnos").DataTable({
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

}