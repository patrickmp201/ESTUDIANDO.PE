<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class CompartirLogroController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('CompartirLogroModal', 'logro');

	}

	public function index(){	        
        


        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/head');

		$this->load->view('CompartirLogroView', $data);
		$this->load->view('layout/footer',$data);
		
	}	

	public function GurdarLogro($id) {
        $data = array(
			

			// 'IdLogro' => $this->input->post('IdLogro'),
			'IdUsuarioDNI'  => $_COOKIE['cookie_user'],
			'Comentarios' => $this->input->post('Comentarios')



        );
        
		// var_dump($data);

        $insert = $this->logro->GurdarLogro($data);
		// echo $insert;
         echo json_encode(array("id" => $insert));

	}

	public function MostrarLogros($idUsuario) 
	{

		$data = $this->logro->MostrarLogros($idUsuario);
		echo json_encode($data);
	

	}

	  
	
}