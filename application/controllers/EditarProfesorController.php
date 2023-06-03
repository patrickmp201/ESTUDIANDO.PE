<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class EditarProfesorController extends CI_Controller {
	
	function __construct(){
		parent::__construct();			
        $this->load->model('EditarProfesorModal', 'editar');


       

	}
    public function index()
    {
        $this->load->view('layout/headprofesor');
        $this->load->view('EditarProfesorView');
        $this->load->view('layout/footerprofesor');

    }
    
    public function RegistroEditar() {
        $idUsuario = $this->input->post('idUsuario'); // Obtener el valor del parámetro idUsuario
        $data = $this->editar->RegistroEditar($idUsuario);
        // var_dump($idUsuario);

        echo json_encode($data);
    // var_dump($data);

    }

    public function GuardarRegistro($id){
        $data = array(	            
            
            'NombreCompleto' => strtoupper($this->input->post('NombreCompleto')),
            'Correo' => $this->input->post('Correo'),
            'Password' => $this->input->post('Password'),
            'Celular' => $this->input->post('Celular'),
            'DNI' => $this->input->post('DNI')
        );
                
        $insert = $this->editar->GuardarRegistro($id, $data);
        echo json_encode(array("id" => $insert));    
    }
    
}