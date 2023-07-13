import '../estilos/css/Vercursos.css';
import Navbar from "../componentes/navbar"
import { useEffect, useState } from 'react';
import axios from 'axios';




const HU010VerCursos = () =>{
    
    const url="http://localhost:4444/cursos"
    const [Cursos,setCursos] =  useState([]);

    useEffect(()=>{
        getCursos();
    },[])

    const getCursos = async() =>{
        const respuesta = await axios.get(url);
        setCursos(respuesta.data);
        console.log(respuesta.data)
    }

    const Curso = (props) =>{
        return(
            <div className="col-lg-6 col-sm-6">
                <div className="menu-item bg-white shadow-on-hover">
                    <div className="menu-item-content p-4">
                        <h5 className="mt-1 mb-2"><a href="/AccederCurso">{props.curso.NOMBRE}</a></h5>
                        <p className="small">{props.curso.GRADO}</p>
                        <p className="small">{props.curso.UNIDAD}</p>
                        <p className="small">{props.curso.DESCRIPCION}</p>
                    </div>
                </div>
            </div>
        )
    }
    

    return (
        <div className='vc'>
            <Navbar/>
            
            <section id="menu" className="bg-light">
            <div className="container">
            <div className="row">
                <div className="col-12 intro-text">
                    <h1>Explora tus cursos para obtener mejores resultados</h1>
                    <h6>Mientras más tareas respondas en los diferentes cursos obtendras mayores beneficios</h6>
                </div>
            </div>
            
        </div>
        <div className="container">
            <ul className="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                <li className="nav-item" role="presentation">
                    <button className="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                        type="button" role="tab" aria-controls="pills-all" aria-selected="true">Todos los cursos</button>
                </li>

                <li className="nav-item" role="presentation">
                    <button className="nav-link" id="pills-breakfast-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-breakfast" type="button" role="tab" aria-controls="pills-breakfast"
                        aria-selected="true">Ciencias</button>
                </li>

                <li className="nav-item" role="presentation">
                    <button className="nav-link" id="pills-lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-lunch"
                        type="button" role="tab" aria-controls="pills-lunch" aria-selected="true">Letras</button>
                </li>

                <li className="nav-item" role="presentation">
                    <button className="nav-link" id="pills-dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-dinner"
                        type="button" role="tab" aria-controls="pills-dinner" aria-selected="true">Adiconales</button>  
                </li>
                <li className="nav-item" role="presentation">
                    <a href='/AñadirCurso'><button className="nav-link" id="pills-dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-agregar"
                        type="button" role="tab" aria-controls="pills-agregar" aria-selected="true">Agregar Curso</button></a>
                </li>

            </ul>

            <div className="tab-content" id="pills-tabContent">
                <div className="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">

                    <div className="row gy-4">
                        {Cursos.map((curso,id)=>(<Curso curso={curso} ></Curso>))}
                    </div>

                </div>

                <div className="tab-pane fade show" id="pills-breakfast" role="tabpanel"
                    aria-labelledby="pills-breakfast-tab" tabindex="0">
                    <div className="row gy-4">
                        {Cursos.map((curso,id)=>(<Curso curso={curso} ></Curso>))}
                    </div>
                </div>

                <div className="tab-pane fade show" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab"
                    tabindex="0">
                    <div className="row gy-4">
                        {Cursos.map((curso,id)=>(<Curso curso={curso} ></Curso>))}
                    </div>
                </div>

                <div className="tab-pane fade show" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab"
                    tabindex="0">
                    <div className="row gy-4">
                        {Cursos.map((curso,id)=>(<Curso curso={curso} ></Curso>))}
                    </div>
                </div>

            </div>
        </div>
            </section>
        </div>
    )
}
export default HU010VerCursos