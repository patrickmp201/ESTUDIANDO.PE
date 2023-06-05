<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class RegistroProfesorController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('RegistroProfesorModal', 'registroprof');

	}
    public function index()
    {



        $this->load->view('RegistroProfesorView');
  

    }
    
    public function guardar_Registro(){			
        $data = array(	            
            'NombreCompleto' => strtoupper($this->input->post('NombreCompleto')),
            'Correo' => $this->input->post('Correo'),
            'Password' => $this->input->post('Password'),
            'Celular' => $this->input->post('Celular'),
            'DNI' => $this->input->post('DNI'),
            'FechaNacimiento' => $this->input->post('FechaNacimiento'),
            'IdRol' => 2


            
       
        );
            
        $insert = $this->registroprof->guardarRegistro($data);
     	// echo $insert;
         echo json_encode(array("id" => $insert));
	       
	}
}