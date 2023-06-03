<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tu página</title>
    <style>


        .section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #section1 {
            background-image: url("assets/images/estudiando_wallpaper.jpg");
        }

        #section2 {
            background-image: url("imagen2.jpg");
        }

        #section3 {
            background-image: url("imagen3.jpg");
        }

        .content {
            text-align: center;
            color: white;
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div id="section1" class="section" style="height: 600px;">
        <div class="content">
            <h1 class="display-1">Una página pensada en estudiantes</h1>
            <h1 class="display-1">Supera tus límites repasando con nosotros</h1>
            <br><br>
            <div class="button-list">
                <a href="curso">
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <i class="mdi mdi-heart me-1"></i> Cursos de Secundaria
                    </button>
                </a>
                <a href="alumnos">
                    <button type="button" class="btn btn-dark waves-effect waves-light">
                        <i class="mdi mdi-heart me-1"></i> Ranking de Alumnos
                    </button>
                </a>
            </div>
        </div>
    </div>
    </br></br>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="section2" class="section">
                <div class="content">
                    <span><h5 class="display-5" style="text-align: justify;color:orange;">Comienza resolviendo tareas de todos los cursos para fortalecer el aprendizaje fuera del colegio!</h5></span>
                    <p class="card-text " style="text-align: justify;color:black;font-size:20px;">Sé que a veces puede ser difícil encontrar la motivación para estudiar y mantenerse enfocado, pero quiero recordarles que cada uno de ustedes tiene un potencial increíble. Con la página web Estudiando.pe, tienen la oportunidad de acceder a una gran cantidad de recursos y herramientas para ayudarles en su camino educativo.
                        Recuerden que cada día es una nueva oportunidad para aprender algo nuevo y acercarse un paso más a sus metas. No se desanimen por los obstáculos que puedan encontrar en el camino, en lugar de eso, conviértanlos en oportunidades para crecer y mejorar.
                        ¡Están en el camino correcto para alcanzar sus sueños! Mantengan una actitud positiva, trabajen duro y utilicen las herramientas disponibles en Estudiando.pe para lograr el éxito que se merecen. ¡Ustedes pueden hacerlo!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-4">
                <img src="assets/images/estudiando.jpg" alt="" height="550px">
            </div>
        </div>
    </div>
</div>

    </br></br>
        <div id="section3" class="section" style="background-color: black;padding: 50px;">
            <div class="content">
                <h1 class="display-1" style="text-align: center; color: white;">Beneficios de nuestro sitio</h1>
    </br></br></br>
                <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card text-white bg-primary mb-3" style="height: 620px;">
                                            <div class="card-header bg-primary"><h1 style="Display-1">METODOLOGÍAS</h1></div>
                                            <div class="card-body">
                                                <p class="card-text" style="text-align: justify;font-size:20px;">Para resolver tareas fácilmente, existen varias metodologías que puedes utilizar. Una de ellas es la técnica Pomodoro, que consiste en dividir la tarea en bloques de 25 minutos, separados por descansos de 5 minutos. Otra opción es la técnica Eisenhower, que clasifica las tareas según su urgencia e importancia para priorizarlas. También puedes utilizar la técnica de los 5 porqués, que consiste en preguntarse cinco veces el porqué de la tarea para encontrar su causa raíz y solucionarla eficazmente. Además, es importante mantener un ambiente de trabajo organizado y evitar distracciones para aumentar la productividad.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card text-white bg-success mb-3">
                                            <div class="card-header bg-success"><h1 style="Display-1">TAREAS</h1></div>
                                            <div class="card-body">
                                                <p class="card-text"  style="text-align: justify;font-size:20px;">Los alumnos de primero a quinto de secundaria tienen diferentes tareas que desarrollar durante su etapa escolar. En primero de secundaria, las tareas pueden incluir la lectura y análisis de textos, la práctica de operaciones matemáticas básicas y la elaboración de proyectos sencillos. En segundo de secundaria, los alumnos pueden comenzar a trabajar en proyectos más complejos, realizar presentaciones orales y profundizar en temas de ciencias sociales y naturales. En tercero de secundaria, las tareas pueden incluir la elaboración de ensayos, la resolución de problemas matemáticos avanzados y la preparación para exámenes de ingreso a preparatoria. En cuarto y quinto de secundaria, los alumnos pueden trabajar en proyectos de investigación, presentaciones más elaboradas y preparación para exámenes de ingreso a universidades. Es importante que los alumnos se esfuercen en cumplir con sus tareas de manera efectiva y eficiente para aprovechar al máximo su educación.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="card text-white bg-danger mb-3" style="height: 620px;">
                                            <div class="card-header bg-danger"><h1 style="Display-1">BENEFICIOS</h1></div>
                                            <div class="card-body">
                                                <p class="card-text"  style="text-align: justify;font-size:20px;">Queridos alumnos, resolver tareas de manera efectiva no solo les ayudará a aprender y entender los temas que se están enseñando, sino que también puede tener beneficios en su futuro académico. Si se esfuerzan por obtener buenos resultados y quedan en los primeros puestos de su clase, pueden obtener beneficios en su ingreso a la universidad. Muchas universidades ofrecen becas y programas especiales para estudiantes con excelentes calificaciones y logros académicos destacados. Además, una buena trayectoria escolar puede aumentar sus posibilidades de ser aceptados en universidades de mayor prestigio y obtener oportunidades laborales más atractivas en el futuro. Recuerden que el esfuerzo y dedicación que pongan en su educación puede ser la clave para un futuro exitoso. </p>
                                            </div>
                                        </div>
                                    </div>

                            
                                </div>
                            </div>
                        </div>

              </div>
        </div>
      
    </div>
</body>

</html>
