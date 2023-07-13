import '../estilos/css/Login.css';
import swal from 'sweetalert';
import axios from 'axios';
import { useEffect, useState } from 'react';


export const Register =(props) =>{
    const [email,setEmail] = useState("")
    const [pass,setPass] = useState("")
    const [name,setName] = useState("")
    const [num,setNum] = useState("")
    const [dni,setDNI] = useState("")
    const [cole,setCole] = useState("")
    const [grado,setGrad] = useState("")
    const [edad,setEdad] = useState("")
    const [errorRegistro, setErrorRegistro] = useState(false)

    const handleSubmit = (e) => {
        e.preventDefault()
        console.log(email)
        console.log(errorRegistro)
        console.log(alerta)
    }
    
    const alerta = () =>{
        swal("Registro exitoso")
    }

    const httpRegistro = async (user) =>{
    const resp = await fetch("http://localhost:4444/registro", {
        method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(user),
        });
        const data = await resp.json();
        console.log(data)
        if (data.verify) {
            // Se registró satisfactoriamente.
            alert("Cuenta registrada satisfactoriamente!");
            window.location.href="http://localhost:4445/"; // Redireccion con renderizado
            localStorage.setItem("Usuario_correo",user.email)
            
        } else {
            // Correo ya registrado.
            alert("Ya existe el usuario, intente nuevamente!");
            setErrorRegistro(true)
        }
    }
    const url="http://localhost:4444/colegio"
    const [Colegio,setColegio] = useState([])

    const getColegio = async() =>{
        const respuesta = await axios.get(url);
        setColegio(respuesta.data);
        console.log(respuesta.data)
    }

    useEffect(()=>{
        getColegio();
    },[])

    const Datacole = (props) =>{
        return(
                <option value={props.curso.NOMBRE} >{props.curso.NOMBRE}</option> 
                
        )
    }

    // //PROFESOR REGISTRO 
    // const [email2,setEmail2] = useState("")
    // const [pass2,setPass2] = useState("")
    // const [name2,setName2] = useState("")
    // const [num2,setNum2] = useState("")
    // const [dni2,setDNI2] = useState("")
    // const [cole2,setCole2] = useState("")
    // const [edad2,setEdad2] = useState("")
    // const [errorRegistro2, setErrorRegistro2] = useState(false)

    const httpRegistroP = async (user) =>{
        const resp = await fetch("http://localhost:4444/registroP", {
            method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(user),
            });
            const data = await resp.json();
            console.log(data)
            if (data.verify) {
                // Se registró satisfactoriamente.
                alert("Cuenta registrada satisfactoriamente!");
                window.location.href="http://localhost:4445/"; // Redireccion con renderizado
                localStorage.setItem("Usuario_correo",user.email)
                
            } else {
                // Correo ya registrado.
                alert("Ya existe el usuario, intente nuevamente!");
                setErrorRegistro(true)
            }
        }


// REGISTRO PROFESOR
const [checkedA, setCheckedA] = useState(false);//ALUMNO
const [checkedP, setCheckedP] = useState(false); //PROFE

function toggle(value){
    return !value;
  }
    

    return(
        <div className='auth-form-container'>
            <h1 className='tittle'>REGISTRATE EN ESTUDIANDO.PE</h1>
            <form className='register-form' onSubmit={handleSubmit}>

                <label htmlFor='name'>Nombres Completos</label>
                <input value ={name} onChange={(e) => setName(e.target.value)} name="name" id="name" placeholder='Nombre Completo'/>

                <label htmlFor = "email" >Correo</label>
                <input value ={email} onChange={(e) => setEmail(e.target.value)} type = "email" placeholder = "ingresa tu correo" id="email" name="email"/>

                <label htmlFor = "password" >Contraseña</label>
                <input value={pass} onChange={(e) => setPass(e.target.value)} type = "password" placeholder = "*************" id="password" name="password"/>

                <label htmlFor = "number" >Numero de Celular</label>
                <input value={num} onChange={(e) => setNum(e.target.value)} type = "tel" placeholder = "946597937" id="number" name="number"/>

                <label htmlFor = "DNI" >DNI O C.E.</label>
                <input value={dni} onChange={(e) => setDNI(e.target.value)} type = "DNI" placeholder = "72915878" id="dni" name="dni"/>

                <label htmlFor = "DNI" >EDAD</label>
                <input value={edad} onChange={(e) => setEdad(e.target.value)} type = "EDAD" placeholder = "72915878" id="edad" name="edad"/>
                
                <label htmlFor = "password" >Colegio de Procedencia</label>
                <select onChange={(e) => setCole(e.target.value)} value={cole} name="cole" id="cole">
                    <option value="">Selecciona</option>
                    {Colegio.map((curso,id)=>(<Datacole curso={curso}></Datacole>))}
                </select>
                <label htmlFor = "grado" >Grado</label>
                <input value={grado} onChange={(e) => setGrad(e.target.value)} type = "grado" placeholder = "1ero de secundaria" id="password" name="password"/>

                <div className='check'>
                <input type="checkbox" checked={checkedP} onChange={() => setCheckedP(toggle)}/>Profesor

                <input type="checkbox" checked={checkedA} onChange={() => setCheckedA(toggle)} />Estudiante </div>


                <button onClick={()=>{
                    if (name !== "" && email !== "" && pass !== "") {
                        const user = {}
                        user.name = name;
                        user.email = email;
                        user.dni = dni;
                        user.nombre_colegio = cole;
                        user.edad= edad;
                        user.grado = grado;
                        user.password = pass;
                        user.telefono = num;

                        
                        DecidirRegistro();

                        //funcion (//)
                        function DecidirRegistro (setCheckedA,setCheckedP){
                            if(setCheckedA===false && setCheckedP===false){
                                console.log("selecciona una opción")
                                alert("selecciona una opción de registro")
                            }else if(checkedA===true){
                                httpRegistro(user);
                            }
                            else if(checkedP===true){
                                httpRegistroP(user);
                            }
                            return 0;
                        }
                        
                        

                        
                        /*
                            0. Valida si tiene alguno seleccionado o todos 
                            1. si solamente se ha marcado 1 check
                            2. Si es el de alumno funcion httpRegistro
                            3. Else if es profesor funcion httpRegistroP
                        */
                        setName("")
                        setEmail("")
                        setDNI("")
                        setCole("")
                        setEdad("")
                        setGrad("")
                        setPass("")
                        setNum("")

                        
                        

                } else {
                    alert("Completa los formularios correctamente!");
                }}
                }> REGISTRARME</button>
                

            </form>
            <a href="/"> <button className ="link-btn" >¿Ya tienes una cuenta? Inicia Sesion </button></a>
            
        </div>
    )
}