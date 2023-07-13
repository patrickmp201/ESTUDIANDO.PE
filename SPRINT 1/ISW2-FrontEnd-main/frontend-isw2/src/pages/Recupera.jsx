import React, {useState} from 'react';
import '../estilos/css/Login.css';
import swal from 'sweetalert';


export const Recupera =(props) =>{
    const [email,setEmail] = useState("")


    const handleSubmit = (e) => {
        e.preventDefault()
        console.log(email)
    }
    
    const alerta = () =>{
        swal("Revise su buzon en su correo y siga los pasos")
    }

    return(
        <div className='auth-form-container'>
            <h1 className='tittle'>¿NO RECUERDAS TU CONTRASEÑA?</h1>
            <h2 className='tittle'>¡No te preocupes! Nos sucede a todos. Ingresa tu Email y te ayudaremos</h2>
            <form className='register-form' onSubmit={handleSubmit}>

                <div>
                <label htmlFor = "email" >EMAIL: <br></br></label>
                <input value ={email} onChange={(e) => setEmail(e.target.value)} type = "email" placeholder = "INGRESA TU EMAIL" id="email" name="email"/>
                </div>

                <button onClick={()=>alerta()}> RECUPERAR </button>
                

            </form>
            <a href="/"> <button className ="link-btn" >Regresar al Inicio de Sesion </button></a>
            
        </div>
    )
}