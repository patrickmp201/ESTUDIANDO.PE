<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class RegistroController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('RegistroModal', 'registro');

	}
    public function index()
    {
        $data['grado'] = $this->registro->Grado();
        $data['colegio'] = $this->registro->ColegioProcedencia();
        $data['rol'] = $this->registro->Rol();


        $this->load->view('RegistroView',$data);
  

    }
    
    public function guardar_Registro(){			
        $data = array(	            
            'NombreCompleto' => strtoupper($this->input->post('NombreCompleto')),
            'Correo' => $this->input->post('Correo'),
            'Password' => $this->input->post('Password'),
            'Celular' => $this->input->post('Celular'),
            'DNI' => $this->input->post('DNI'),
            'IdColegioProcedencia' => $this->input->post('IdColegioProcedencia'),
            'FechaNacimiento' => $this->input->post('FechaNacimiento'),
            'IdGrado' => $this->input->post('IdGrado'),
            'IdRol' => 1


            
       
        );
            
        $insert = $this->registro->guardarRegistro($data);
     	// echo $insert;
         echo json_encode(array("id" => $insert));
	       
	}

    public function Grado(){
		//var_dump('entra');
		$data = $this->registro->Grado();

		echo json_encode($data);

	}
    public function Rol(){
		//var_dump('entra');
		$data = $this->registro->Rol();

		echo json_encode($data);

	}
    public function ColegioProcedencia(){
		//var_dump('entra');
		$data = $this->registro->ColegioProcedencia();

		echo json_encode($data);

	}

    




}