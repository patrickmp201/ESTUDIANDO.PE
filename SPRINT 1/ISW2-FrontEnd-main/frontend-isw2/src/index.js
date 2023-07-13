import React from 'react';
import ReactDOM from 'react-dom/client';

import HU009PaginaPrincipal from './pages/HU009-PaginaPrincipal';
import HU010VerCursos from './pages/HU010-VerCursos';
import AñadirCurso from './pages/HU008-AñadirCurso';
import AccederCurso from './pages/HU011-AccederCurso';
import { Login } from './pages/Login';
import { Register } from './pages/Register';



import { BrowserRouter, Route, Routes } from 'react-router-dom';



import HU004Profesor from './pages/HU004Profesor';
import { Recupera } from './pages/Recupera';



//import Navbar from './componentes/navbar';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  
  <React.StrictMode>
  
  <React.StrictMode>

    <BrowserRouter>
    
    <Routes>
      <Route path='/PaginaPrincipal' element={<HU009PaginaPrincipal />}/>
      <Route path='/VerCursos' element={<HU010VerCursos />}/>
      <Route path='/Register' element={<Register/>}/>
      <Route path='/AñadirCurso' element={<AñadirCurso/>}/>
      <Route path='/AccederCurso' element={<AccederCurso/>}/>
      <Route path='/' element={<Login/>}/>
      <Route path='/AsignadosProfesor' element={<HU004Profesor/>}/>
      <Route path='/Recupera' element={<Recupera/>}/>
      

    </Routes>

    </BrowserRouter>

  </React.StrictMode>

  </React.StrictMode>
);


