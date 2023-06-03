<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class PaginaPrincipalController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('PaginaPrincipalModal', 'principal');

	}

	public function index(){	        
        
        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/head');
		$this->load->view('PaginaPrincipalView', $data);
		$this->load->view('layout/footer',$data);
		
	}	
	


}