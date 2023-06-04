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

		$this->load->view('EleccionNivelView', $data);
		$this->load->view('layout/footer',$data);
		
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

}

