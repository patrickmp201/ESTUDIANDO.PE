$(document).ready(function() {
    $.ajax({
        data: {id:0},
		dataType: 'json',
		url: 'MaterialAyudaController/MostarVideoImagen',
		success:  function (response) {
            for(i=0; i<response.length; i++) {
                // console.log(response[i]);
                if (response[i].tipo == 'video') {
                    var parentElement = document.getElementById('parentElementId');
                    var maxDivsToShow = 4; // Cantidad máxima de divs a mostrar
                    var divsShown = 0; // Contador de divs mostrados
                    var hiddenDivs = [];  // Array para almacenar los divs ocultos

                    for (var i = 0; i < response.length; i++) {
                        // console.log(response[i]);
                        if (response[i].tipo == 'video') {
                            var cardDiv = document.createElement('div');
                            cardDiv.classList.add('card');

                            // Crear el elemento div card-body
                            var cardBodyDiv = document.createElement('div');
                            cardBodyDiv.classList.add('card-body');

                            // Crear el elemento div d-flex align-items-start
                            var mainDiv = document.createElement('div');
                            mainDiv.classList.add('d-flex', 'align-items-start');

                            // Crear el elemento de imagen
                            var imgElement = document.createElement('img');
                            imgElement.classList.add('me-2', 'avatar-sm', 'rounded-circle');
                            imgElement.src = 'assets/images/niñosEstudiando.jpg';

                            imgElement.alt = 'Generic placeholder image';

                            // Crear el elemento div contenedor
                            var containerDiv = document.createElement('div');
                            containerDiv.classList.add('w-100');

                            // Crear el elemento de menú desplegable
                            var dropdownDiv = document.createElement('div');
                            dropdownDiv.classList.add('dropdown', 'float-end', 'text-muted');
                            var dropdownLink = document.createElement('a');
                            dropdownLink.href = '#';
                            dropdownLink.classList.add('dropdown-toggle', 'text-muted', 'font-18');
                            dropdownLink.setAttribute('data-bs-toggle', 'dropdown');
                            dropdownLink.setAttribute('aria-expanded', 'false');
                            var dropdownIcon = document.createElement('i');
                            dropdownIcon.classList.add('mdi', 'mdi-dots-horizontal');
                            dropdownLink.appendChild(dropdownIcon);
                            dropdownDiv.appendChild(dropdownLink);

                            // Crear el elemento h5
                            var h5Element = document.createElement('h5');
                            var h5Link = document.createElement('a');
                            // h5Link.href = 'contacts-profile.html';
                            h5Element.classList.add('m-0');
                            h5Link.classList.add('text-reset');
                            h5Link.textContent = response[i].nombres;
                            h5Element.appendChild(h5Link);

                            // Crear el elemento de párrafo con tiempo
                            var pElement = document.createElement('p');
                            pElement.classList.add('text-muted');
                            var smallElement = document.createElement('small');
                            smallElement.id = 'tiempo';
                            smallElement.textContent = response[i].fecha_subida;
                            pElement.appendChild(smallElement);

                            // Agregar elementos al contenedor principal
                            containerDiv.appendChild(dropdownDiv);
                            containerDiv.appendChild(h5Element);
                            containerDiv.appendChild(pElement);
                            mainDiv.appendChild(imgElement);
                            mainDiv.appendChild(containerDiv);

                            // Crear el elemento de descripción
                            var descripcionElement = document.createElement('p');
                            descripcionElement.id = 'descripcion';

                            // Crear el elemento de relación de aspecto
                            var ratioElement = document.createElement('div');
                            ratioElement.classList.add('ratio', 'ratio-16x9');
                            var iframeElement = document.createElement('iframe');
                            iframeElement.src = 'https://www.youtube.com/embed/' + response[i].url_id;
                            ratioElement.appendChild(iframeElement);

                            // Agregar los elementos al elemento card-body
                            cardBodyDiv.appendChild(mainDiv);
                            cardBodyDiv.appendChild(descripcionElement);
                            cardBodyDiv.appendChild(ratioElement);

                            // Agregar el elemento card-body al elemento card
                            cardDiv.appendChild(cardBodyDiv);

                            if (divsShown >= maxDivsToShow) {
                                // Si se alcanza la cantidad máxima de divs mostrados, se ocultan los restantes
                                cardDiv.style.display = 'none';
                                parentElement.appendChild(cardDiv);
                                hiddenDivs.push(cardDiv);
                            } else {
                                // Agregar la card al parentElement solo si no se ha alcanzado la cantidad máxima de divs mostrados
                                cardDiv.style.display = 'bloc';
                                parentElement.appendChild(cardDiv);
                                hiddenDivs.push(cardDiv);
                                // parentElement.appendChild(cardDiv);
                                // divsShown++;
                            }
                                divsShown++;
                                // console.log(divsShown);
                            // console.log(maxDivsToShow);
                            // console.log(hiddenDivs);
                        }
                    }
                        // console.log(divsShown);
                        // console.log(maxDivsToShow);
                    // if (divsShown > maxDivsToShow) {
                    //     // console.log(parentElement);
                    //     // Si hay divs ocultos, mostrar el botón "Ver más"
                    //     var verMasButton = document.createElement('button');
                    //     verMasButton.id = 'verMasButton';
                    //     verMasButton.textContent = 'Ver más';
                    //     verMasButton.addEventListener('click', function() {
                    //         console.log(parentElement.getElementsByClassName('card'));
                    //         // Al hacer clic en el botón, se muestran todos los divs ocultos
                    //         var hiddenDivs = parentElement.getElementsByClassName('card');
                    //         for (var i = 0; i < hiddenDivs.length; i++) {
                    //         hiddenDivs[i].style.display = 'block';
                    //         }
                    //         // Se oculta el botón "Ver más"
                    //         verMasButton.style.display = 'none';
                    //     });

                    // // Agregar el botón "Ver más" al parentElement
                    //     parentElement.appendChild(verMasButton);
                    // }
                    if (divsShown > maxDivsToShow) {
                        // console.log(hiddenDivs);
                        // Si hay divs ocultos, mostrar el botón "Ver más"
                        var verMasButton = document.createElement('button');
                        verMasButton.id = 'verMasButton';
                        verMasButton.textContent = 'Ver más';
                        verMasButton.addEventListener('click', function() {
                            // var hiddenDivs = parentElement.getElementsByClassName('card');
                            // console.log(parentElement.getElementsByClassName('card'));
                          // Al hacer clic en el botón, se muestran los siguientes divs ocultos
                          var divsToShow = hiddenDivs.splice(4, maxDivsToShow);
                          console.log(divsToShow);
                          for (var i = 0; i < divsToShow.length; i++) {
                            console.log('aca');
                            divsToShow[i].style.display = 'block';
                            divsShown++;
                          }
                      
                          if (hiddenDivs.length === 0) {
                            // Si no quedan más divs ocultos, ocultar el botón "Ver más"
                            verMasButton.style.display = 'none';
                          }
                        });
                      
                        // Agregar el botón "Ver más" al parentElement
                        parentElement.appendChild(verMasButton);
                    }

                    
                }                
            }            
		}
    });
});