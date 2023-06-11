<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class EleccionNivelController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('EleccionNivelModal', 'nivel');

	}

	public function index(){	        
        


        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/head');
		$data['curso'] = $this->nivel->VerCurso();
		$data['alternativas'] = $this->nivel->LlamadoAlternativa();


		$this->load->view('EleccionNivelView', $data);
		$this->load->view('layout/footer',$data);
		
	}	
	public function LlamadoAlternativa(){
		//var_dump('entra');
		$data = $this->nivel->LlamadoAlternativa();
		
		echo json_encode($data);

	}


	public function Niveles() 
	{
		$nivel = $this->input->post('IdNivel');
		$curso = $this->input->post('IdCurso');
		

		$data = $this->nivel->Niveles($nivel,$curso);
		echo json_encode($data);
	
    }

	public function VerCurso(){
		//var_dump('entra');
		$data = $this->nivel->VerCurso();

		echo json_encode($data);

	}



	// public function ValidarChecklist()
	// {
	//   $IdActividad = $this->input->post('IdActividad');
	//   $data = $this->nivel->ValidarChecklist($IdActividad);
	//   echo json_encode($data);
	// }
	
	public function checklist_componente($IdActividad) {
		$data = $this->nivel->checklist_componente($IdActividad);
		echo json_encode($data);
	}
	
	
	public function guardar_checklist_componente()
	{
	  $arr = $this->input->post('arr');
	  $IdResolucion = $this->input->post('IdResolucion');
	//   $IdRespuestaSeleccionada  = $this->input->post('IdRespuestaSeleccionada');

	  foreach ($arr as $value) {
		$data = array(
			'IdUsuarioDNI' => $_COOKIE['cookie_user'],
			'IdActividad' => $IdResolucion,
			'RespuestaSeleccionada' => $value['IdAlternativa'] // Acceder al valor correcto de IdAlternativa
		);
	
		$this->nivel->guardarChecklistComponente($data);
	}
	
	  echo json_encode(array("status" => true));
	}
	


}

