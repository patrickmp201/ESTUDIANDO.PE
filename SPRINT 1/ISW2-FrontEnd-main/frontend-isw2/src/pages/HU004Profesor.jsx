import React from 'react';
import "../estilos/css/Rest.css";
import Navbar from "../componentes/navbar"
import HU004Asignados from './HU004Asignados';






function HU004Profesor() {
    


  return (

    
    
    <div className="Platos">
        <Navbar/>
        <h1>BIENVENIDO PROFESOR</h1>
        <div className='contenedor-principal'>
            <h3>SELECCIONE GRADO Y COLEGIO</h3>
            <select className="seleccionador" name="RESTAURANTE DEL PEDIDO">
            <option value="seleccione">1ero de Secundaria</option>            
            <option value="LongHorn">2do de Secundaria</option>
            <option value="Chili's">3ero de Secundaria</option>
            <option value="T.G.I. Friday's">4to de Secundaria</option>
            <option value="T.G.I. Friday's">5to de Secundaria</option>
        </select>
        </div>



        <div className='contenedor-principal'>
            <select className="seleccionador" name="RESTAURANTE DEL PEDIDO">
            <option value="seleccione">MATEMATICAS</option>
            <option value="LongHorn">CIENCIAS</option>
            <option value="Chili's">LENGUAJE</option>
            <option value="T.G.I. Friday's">IDIOMAS</option>
        </select>
        
        </div>

        <div className='platillos'>
            <HU004Asignados
                imagen = "curso1.webp"
                nombre = "Algebra"
                grado = "1ero Secundario"
                descripcion = "CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LOGICA DE LOS ALUMNOS"
                codigo = "ALG-2023"
             />
            <HU004Asignados
                imagen = "geometria.png"
                nombre = "Geometria"
                grado = "1ero Secundario"
                descripcion = "CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LOGICA DE LOS ALUMNOS"
                codigo = "GMT-2023"
             />
            <HU004Asignados
                imagen = "trigo.png"
                nombre = "Trigonometria"
                grado = "1ero Secundario"
                descripcion = "CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LOGICA DE LOS ALUMNOS"
                codigo = "TRGM-2023"
             />
            <HU004Asignados
                imagen = "arit.jpg"
                nombre = "Aritmetica"
                grado = "1ero Secundario"
                descripcion = "CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LOGICA DE LOS ALUMNOS"
                codigo = "ARTM-2023"
                
             />
            <HU004Asignados
                imagen = "rm.jpg"
                nombre = "Razomaniento Matematico"
                grado = "1ero Secundario"
                descripcion = "CURSO ESPECIALIZADO EN EL DESARROLLO DE LA LOGICA DE LOS ALUMNOS"
                codigo = "RM-2023"
             />

        </div>
    </div>
  );
}

export default HU004Profesor;