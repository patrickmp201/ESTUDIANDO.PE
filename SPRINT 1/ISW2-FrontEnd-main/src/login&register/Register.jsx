import React, {useState} from 'react';

export const Register =(props) =>{
    const [email,setEmail] = useState("")
    const [pass,setPass] = useState("")
    const [name,setName] = useState("")
    const [num,setNum] = useState("")
    const [dni,setDNI] = useState("")
    const [nacimiento,setNac] = useState("")
    const [cole,setCole] = useState("")
    const [grado,setGrad] = useState("")

    const handleSubmit = (e) => {
        e.preventDefault()
        console.log(email)
    }
    
    return(
        <div className='auth-form-container'>
            <h1 className='tittle'>REGISTRATE EN ESTUDIANDO.PE</h1>
            <form className='register-form' onSubmit={handleSubmit}>

                <label htmlFor='name'>Nombres Completos</label>
                <input value ={name} onChange={(e) => setName(e.target.value)} name="name" id="name" placeholder='Nombre Completo'/>

                <label htmlFor = "email" >Correo</label>
                <input value ={email} onChange={(e) => setEmail(e.target.value)} type = "email" placeholder = "tucorreo@hotmail.com" id="email" name="email"/>

                <label htmlFor = "password" >Contraseña</label>
                <input value={pass} onChange={(e) => setPass(e.target.value)} type = "password" placeholder = "*************" id="password" name="password"/>

                <label htmlFor = "number" >Numero de Celular</label>
                <input value={num} onChange={(e) => setNum(e.target.value)} type = "tel" placeholder = "946597937" id="number" name="number"/>

                <label htmlFor = "DNI" >DNI O C.E.</label>
                <input value={dni} onChange={(e) => setDNI(e.target.value)} type = "DNI" placeholder = "72915878" id="dni" name="dni"/>
                
                <label htmlFor = "password" >Colegio de Procedencia</label>
                <input value={cole} onChange={(e) => setCole(e.target.value)} type = "cole" placeholder = "PAMER" id="password" name="password"/>
                
                <label htmlFor = "grado" >Grado</label>
                <input value={grado} onChange={(e) => setGrad(e.target.value)} type = "grado" placeholder = "1ero de secundaria" id="password" name="password"/>

                <label htmlFor = "nacimiento" >Fecha de Nacimiento</label>
                <input value={nacimiento} onChange={(e) => setNac(e.target.value)} type = "date" placeholder = "22/03/2000" id="nacimiento" name="nacimiento"/>

                <button type="submit">Registrar como estudiante</button>
                <button type="submit">Registrar como profesor</button>

            </form>
            <button className ="link-btn" onClick={() => props.onFormSwitch("login")}>¿Ya tienes una cuenta? Inicia Sesion</button>
        </div>
    )
}