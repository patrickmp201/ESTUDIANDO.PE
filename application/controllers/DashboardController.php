<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class DashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('AdministradorModal', 'admi');

	}
	public function index(){	        
        


        $data = array(
			// 'title' => "Principal",
			// 'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/headprofesor');

		$this->load->view('DashboardView', $data);
		$this->load->view('layout/footerprofesor',$data);
        
		
}

public function Ranking() 
{

    $data = $this->admi->Ranking();
    echo json_encode($data);


}

public function editar_actividad($IdActividad) {
	$data = $this->admi->editarActividad($IdActividad);
	echo json_encode($data);
}

public function guardar_editado_actividad($IdActividad) {
	$data = array(
		'IdActividad' => strtoupper($this->input->post('IdActividad')),
		'NombreActividad' => strtoupper($this->input->post('NombreActividad')),
		'Enunciado' => strtoupper($this->input->post('Enunciado')),
		'IdCurso' => $this->input->post('IdCurso'),
		'IdNivel' => $this->input->post('IdNivel'),
		'EstadoActividad' => $this->input->post('EstadoActividad')
	);

	$this->admi->actualizarActividad($IdActividad, $data);
	echo json_encode(array("status" => TRUE));
}
}