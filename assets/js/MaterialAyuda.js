$(document).ready(function() {
  $.ajax({
      data: {id:0},
  dataType: 'json',
  url: 'MaterialAyudaController/MostarVideoImagen',
  success:  function (response) {
          for(i=0; i<response.length; i++) {
              console.log(response);
              // if (response[i].tipo == 'video') {
                  // console.log('1');
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
                          imgElement.src = './assets/images/estudiando_wallpaper.jpg';
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
                          descripcionElement.textContent = response[i].descripcion;
                          pElement.appendChild(descripcionElement);

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
                      }else{
                          console.log(response[i].url_id); // Imprime la cadena de texto obtenida
                          // Aquí puedes procesar la cadena de texto para convertirla en un array
                          // const arrayTexto = response[i].url.split(',');
                          // console.log(arrayTexto);
                          var imagePaths = 
                              response[i].url_id.split(',')
                            ;
                            
                            // Crear el contenedor principal
                            var card = document.createElement('div');
                            card.classList.add('card');
                            
                            var cardBody = document.createElement('div');
                            cardBody.classList.add('card-body');
                            card.appendChild(cardBody);
                            
                            // Agregar el título
                            var title = document.createElement('h4');
                            title.classList.add('header-title');
                            // title.textContent = 'With indicators';
                            cardBody.appendChild(title);
                            
                            // Agregar el subtítulo
                            var subtitle = document.createElement('p');
                            subtitle.classList.add('sub-header');
                            // subtitle.textContent = 'You can also add the indicators to the carousel, alongside the controls, too.';
                            subtitle.textContent = 'Formula de triangulo y cuadrado.';
                            cardBody.appendChild(subtitle);
                            
                            // Crear el contenedor del carousel
                            var carousel = document.createElement('div');
                            carousel.id = 'carouselExampleIndicators';
                            carousel.classList.add('carousel', 'slide');
                            carousel.setAttribute('data-bs-ride', 'carousel');
                            cardBody.appendChild(carousel);
                            
                            // Agregar los indicadores
                            var indicators = document.createElement('ol');
                            indicators.classList.add('carousel-indicators');
                            carousel.appendChild(indicators);
                            
                            imagePaths.forEach(function (path, index) {
                              var indicator = document.createElement('li');
                              indicator.setAttribute('data-bs-target', '#carouselExampleIndicators');
                              indicator.setAttribute('data-bs-slide-to', index.toString());
                              if (index === 0) {
                                indicator.classList.add('active');
                              }
                              indicators.appendChild(indicator);
                            });
                            
                            // Agregar las imágenes al carousel
                            var carouselInner = document.createElement('div');
                            carouselInner.classList.add('carousel-inner');
                            carousel.appendChild(carouselInner);
                            
                            imagePaths.forEach(function (path, index) {
                              var slide = document.createElement('div');
                              slide.classList.add('carousel-item');
                              if (index === 0) {
                                slide.classList.add('active');
                              }
                              carouselInner.appendChild(slide);
                            
                              var img = document.createElement('img');
                              img.classList.add('d-block', 'img-fluid');
                              img.src = path;
                              img.alt = 'Slide ' + (index + 1);
                              slide.appendChild(img);
                            });
                            
                            // Agregar los controles de navegación
                            var prevButton = document.createElement('a');
                            prevButton.classList.add('carousel-control-prev');
                            prevButton.href = '#carouselExampleIndicators';
                            prevButton.setAttribute('role', 'button');
                            prevButton.setAttribute('data-bs-slide', 'prev');
                            carousel.appendChild(prevButton);
                            
                            var prevButtonIcon = document.createElement('span');
                            prevButtonIcon.classList.add('carousel-control-prev-icon');
                            prevButtonIcon.setAttribute('aria-hidden', 'true');
                            prevButton.appendChild(prevButtonIcon);
                            
                            var prevButtonLabel = document.createElement('span');
                            prevButtonLabel.classList.add('visually-hidden');
                            prevButtonLabel.textContent = 'Previous';
                            prevButton.appendChild(prevButtonLabel);
                            
                            var nextButton = document.createElement('a');
                            nextButton.classList.add('carousel-control-next');
                            nextButton.href = '#carouselExampleIndicators';
                            nextButton.setAttribute('role', 'button');
                            nextButton.setAttribute('data-bs-slide', 'next');
                            carousel.appendChild(nextButton);
                            
                            var nextButtonIcon = document.createElement('span');
                            nextButtonIcon.classList.add('carousel-control-next-icon');
                            nextButtonIcon.setAttribute('aria-hidden', 'true');
                            nextButton.appendChild(nextButtonIcon);
                            
                            var nextButtonLabel = document.createElement('span');
                            nextButtonLabel.classList.add('visually-hidden');
                            nextButtonLabel.textContent = 'Next';
                            nextButton.appendChild(nextButtonLabel);
                            
                            // Agregar el carousel al documento
                            var container = document.getElementById('container');
                            container.appendChild(card);

                      }
                  }
                  if (divsShown > maxDivsToShow) {
                      // console.log(hiddenDivs);
                      // Si hay divs ocultos, mostrar el botón "Ver más"
                      var verMasButton1 = document.getElementById('verMasButton');
                       var verMasButton = document.createElement('button');
                      verMasButton.id = 'verMasButton';
                      verMasButton.textContent = 'Ver más';
                      verMasButton.addEventListener('click', function() {
                          // var hiddenDivs = parentElement.getElementsByClassName('card');
                          // console.log(parentElement.getElementsByClassName('card'));
                        // Al hacer clic en el botón, se muestran los siguientes divs ocultos
                        var divsToShow = hiddenDivs.splice(4, maxDivsToShow);
                      //   console.log(divsToShow);
                        for (var i = 0; i < divsToShow.length; i++) {
                          console.log('aca');
                          divsToShow[i].style.display = 'block';
                          divsShown++;
                        }
                    
                      //   console.log(divsToShow.length);
                      //   console.log(hiddenDivs.length);
                      //   console.log(hiddenDivs);
                        if (hiddenDivs.length === 4) {
                          // Si no quedan más divs ocultos, ocultar el botón "Ver más"
                          verMasButton.style.display = 'none';
                        }
                      });
                    
                      // Agregar el botón "Ver más" al parentElement
                      verMasButton1.appendChild(verMasButton);
                  }

                  
              // }                
          }            
  }
  });
});


  function eliminar(IdMaterialAyuda) {
    event.preventDefault();
    
    var url = 'MaterialAyudaController/BorrarCurso/' + IdMaterialAyuda;
  console.log(IdMaterialAyuda);
  
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
  
  