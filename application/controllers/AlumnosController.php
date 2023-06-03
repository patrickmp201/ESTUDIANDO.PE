<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class AlumnosController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('AlumnosModal', 'alumno');

	}

	public function index(){	        
        
        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/head');
		$this->load->view('AlumnosView', $data);
		$this->load->view('layout/footer',$data);
		
	}	
	
	public function tablaAlumno(){
		// var_dump('entra');
		$data = $this->alumno->tablaAlumno();
		
		echo json_encode($data);

	}
	

}