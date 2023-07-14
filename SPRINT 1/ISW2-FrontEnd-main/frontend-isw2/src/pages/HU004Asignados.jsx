import React from 'react';
import { Link } from 'react-router-dom';
import "../estilos/css/Rest.css";
import { Routes, Route } from 'react-router-dom';
import HU004Profesor from './HU004Profesor';


function HU004Asignados(props) {



    return (
        <div className="contenedor">
            <div className="contenedor-platos">
                <div className="platos">
                    <img
                        className="plato1"
                        src={require(`../imagenes/hvr_img/${props.imagen}`)}
                        alt="foto bife" />
                    <div className="nombrePlato">
                        <h4 className="rest">
                            <strong>{props.nombre}</strong>
                        </h4>
                        <p className="contenido">
                            <p>{props.grado}</p>
                            <p>{props.descripcion}</p>
                            <p><strong>{props.codigo}</strong></p>
                        </p>
                        
                    </div>

                </div>
            </div>
        </div>
    )

}

export default HU004Asignados;
