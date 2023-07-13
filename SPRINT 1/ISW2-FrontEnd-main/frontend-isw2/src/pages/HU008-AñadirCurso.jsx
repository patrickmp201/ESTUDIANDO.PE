import '../estilos/css/AñadirCurso.css';
import Navbar from "../componentes/navbar"
import axios from 'axios';
import { useEffect, useState } from 'react';


const AñadirCurso = () => {
  const url="http://localhost:4444/cursosExtras"
  const [Cursos,setCursos] =  useState([]);

  useEffect(()=>{
        getCursos();
    },[])

    const getCursos = async() =>{
        const respuesta = await axios.get(url);
        setCursos(respuesta.data);
        console.log(respuesta.data)
    }

  const CursoExtra = (props) =>{
  return(
    <div className="card">
      <h4>{props.curso.NOMBRE}</h4>
      <p className="AC">
        {props.curso.GRADO}
      </p>
      <p className="AC">
        {props.curso.UNIDAD}
      </p>
      <p className="AC" style={{fontSize:"14px"}}>
        {props.curso.DESCRIPCION}
      </p>
    </div>
  )
}



    return(
        <div className='ac'>
          <Navbar/>
              <h1 className="titulo"> Agregar un nuevo Curso</h1>
  <div className="container">
    {Cursos.map((curso,id)=>(<CursoExtra curso={curso}></CursoExtra>))}
  </div>
        </div>
    )
}

export default AñadirCurso