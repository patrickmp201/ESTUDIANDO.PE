//import React from "react";
import Navbar from "../componentes/navbar"
import '../estilos/css/PaginaPrincipal.css';


const HU009PaginaPrincipal = () => {
    return(
        <div className="pp">
            <Navbar/>
            <section id="hero">
        <h2 className="tit">Una pagina pensada en estudiantes, </h2>
        <h2 className="tit">supera tus limites repasando con nosotros</h2>
        <section id="hero2">
          <a href="#">
            <button  class="index_button">Cursos de Secundaria</button>
          </a>
            
          <a href="#"><button class="index_button" >Ranking de alumnos</button></a>
        </section>
    </section>
    <section id="Signup">
        <div class="container_index">
            
        <div class="img-container"></div>
        <div class="texto"><h2>Comienza resolviendo tareas de todos los cursos <span class="color-acento">para fortalecer tu aprendizaje fuera del colegio</span> </h2>
            <p>Sé que a veces puede ser difícil encontrar la motivación para estudiar y mantenerse enfocado, pero quiero recordarles que cada uno de ustedes tiene un potencial increíble. 
                Con la página web Estudiando.pe, tienen la oportunidad de acceder a una gran cantidad de recursos y herramientas para ayudarles en su camino educativo.

                    Recuerden que cada día es una nueva oportunidad para aprender algo nuevo y acercarse un paso más a sus metas. 
                    No se desanimen por los obstáculos que puedan encontrar en el camino, en lugar de eso, conviértanlos en oportunidades para crecer y mejorar.

                    ¡Están en el camino correcto para alcanzar sus sueños! Mantengan una actitud positiva, trabajen duro y utilicen las herramientas disponibles en Estudiando.pe para lograr el éxito que se merecen. ¡Ustedes pueden hacerlo!</p></div>
        
        </div>
    </section>
    <div className="ben">
    <section className="sec" id="nuestrosProductos">
                <div className="container_index">
                  <h2>Beneficios de Nuestro sitio</h2>
                  <div className="productos">
                    <div className="carta">
                      <h3>Metodología</h3>
                      <p>Para resolver tareas fácilmente, existen varias metodologías que puedes utilizar. Una de ellas es la técnica Pomodoro, que consiste en dividir la tarea en bloques de 25 minutos, separados por descansos de 5 minutos. Otra opción es la técnica Eisenhower, que clasifica las tareas según su urgencia e importancia para priorizarlas. También puedes utilizar la técnica de los 5 porqués, que consiste en preguntarse cinco veces el porqué de la tarea para encontrar su causa raíz y solucionarla eficazmente. Además, es importante mantener un ambiente de trabajo organizado y evitar distracciones para aumentar la productividad.</p>
                      
                    </div>
                    <div className="carta">
                      <h3>Tareas</h3>
                      <p>Los alumnos de primero a quinto de secundaria tienen diferentes tareas que desarrollar durante su etapa escolar. En primero de secundaria, las tareas pueden incluir la lectura y análisis de textos, la práctica de operaciones matemáticas básicas y la elaboración de proyectos sencillos. En segundo de secundaria, los alumnos pueden comenzar a trabajar en proyectos más complejos, realizar presentaciones orales y profundizar en temas de ciencias sociales y naturales. En tercero de secundaria, las tareas pueden incluir la elaboración de ensayos, la resolución de problemas matemáticos avanzados y la preparación para exámenes de ingreso a preparatoria. En cuarto y quinto de secundaria, los alumnos pueden trabajar en proyectos de investigación, presentaciones más elaboradas y preparación para exámenes de ingreso a universidades. Es importante que los alumnos se esfuercen en cumplir con sus tareas de manera efectiva y eficiente para aprovechar al máximo su educación.</p>
                      
                    </div>
                    <div className="carta">
                      <h3>Beneficios</h3>
                      <p>Queridos alumnos, resolver tareas de manera efectiva no solo les ayudará a aprender y entender los temas que se están enseñando, sino que también puede tener beneficios en su futuro académico. Si se esfuerzan por obtener buenos resultados y quedan en los primeros puestos de su clase, pueden obtener beneficios en su ingreso a la universidad. Muchas universidades ofrecen becas y programas especiales para estudiantes con excelentes calificaciones y logros académicos destacados. Además, una buena trayectoria escolar puede aumentar sus posibilidades de ser aceptados en universidades de mayor prestigio y obtener oportunidades laborales más atractivas en el futuro. Recuerden que el esfuerzo y dedicación que pongan en su educación puede ser la clave para un futuro exitoso. </p>
                           
                    </div>
                  </div>
                </div>
              </section>
              </div>
    
    
        </div>
    )
}
export default HU009PaginaPrincipal