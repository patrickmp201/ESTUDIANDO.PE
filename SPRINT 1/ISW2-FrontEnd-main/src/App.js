import React, {useState} from 'react';
import './css/App.css';
import { Login } from './login&register/Login';
import { Register } from './login&register/Register';


function App() {
  const[currentForm, setCurrentForm] = useState("login");

  const toggleForm = (forName) =>{
    setCurrentForm(forName)
  }
  return (
    <div className="App">
      {
        currentForm === "login" ? <Login onFormSwitch = {toggleForm}/> : <Register onFormSwitch = {toggleForm} />
      }
    </div>
  );
}



export default App;