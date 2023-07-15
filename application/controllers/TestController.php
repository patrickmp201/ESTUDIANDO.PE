<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class TestController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('TestModel', 'test');

	}

	public function index(){	        
        


        $data = array(
			// 'title' => "Principal",
			// 'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/head');
		$this->load->view('TestView', $data);
		$this->load->view('layout/footer',$data);
		
	}	
    public function Cursoinscritos() 
	{

		$data = $this->test->Cursoinscritos();
		echo json_encode($data);
	

	}
}