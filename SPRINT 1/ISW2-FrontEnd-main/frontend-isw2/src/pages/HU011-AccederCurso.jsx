import '../estilos/css/AccederCurso.css';
import Navbar from "../componentes/navbar"

const AccederCurso = ()=>{
    return(
        <div>
          <Navbar/>
            <h1 className="titulo_AC">
    ELIGE EL NIVEL DE DIFICULTAD DE LA TAREA QUE VAS A REALIZAR</h1>
  <div className="sele">
    <h3 className="titulo2_AC">selecciona un nivel</h3>
    <select className="sel" name="RESTAURANTE DEL PEDIDO">
      <option value="seleccione">Seleccione</option>
      <option value="Nivel 1">Nivel 1</option>
      <option value="Nivel 2">Nivel 2</option>
      <option value="Nivel 3">Nivel 3</option>
      <option value="Nivel 4">Nivel 4</option>
      <option value="Nivel 5">Nivel 5</option>
    </select>
  </div>
  <div className="container">
    <div className="card">
      <h4>Nivel 1</h4>
      <p>
        Grado: 1ero de Secundaría <br /> 
        <br />
        Tema: Operaciones con conjuntos
      </p>
      <a href="#">Comenzar </a>
    </div>
    <div className="card">
      <h4>Nivel 2</h4>
      <p>
      Grado: 1ero de Secundaría <br />
        <br />
        Tema: Ecuaciones cuadráticas
      </p>
      <a href="#"> Comenzar </a>
    </div>
    <div className="card">
      <h4>Nivel 3</h4>
      <p>
      Grado: 1ero de Secundaría <br /> 
        <br />
        Tema: Operaciones combinadas
      </p>
      <a href="#"> Comenzar </a>
    </div>
    <div className="card">

      <h4>Nivel 4</h4>
      <p>
      Grado: 1ero de Secundaría <br /> 
        <br />
        Tema: Inecuaciones
      </p>
      <a href="#"> Comenzar </a>
    </div>
    <div className="card">
  
      <h4>Nivel 5</h4>
      <p>
        Grado: 1ero de Secundaría <br /> <br />
        Tema: Triangulos
      </p>
      <a href="#"> Comenzar </a>
    </div>
  </div>
        </div>
    )
}
export default AccederCurso