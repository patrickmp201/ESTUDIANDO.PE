<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class PaginaPrincipalProfesorController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('PaginaPrincipalProfesorModal', 'principal');

	}

	public function index(){	        
        
        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
        $this->load->view('layout/headprofesor',$data);
		$this->load->view('PaginaPrincipalProfesorView', $data);
		$this->load->view('layout/footerprofesor',$data);
		
	}	
	


}