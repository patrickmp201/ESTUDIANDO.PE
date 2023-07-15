<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class CursoController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('CursoModal', 'curso');

	}

	public function index(){	        
        


        // $data = array(
		// 	'title' => "Principal",
		// 	'js' => "assets/js/dashboard.js"
		// );
		
		$this->load->view('layout/head');

		$data['curso'] = $this->curso->VerCurso();

		$this->load->view('CursoView', $data);
		$this->load->view('layout/footer',$data);
		
	}	
	

	public function Cursoinscritos($idUsuario) 
	{

		$data = $this->curso->getCursosUsuario($idUsuario);
		echo json_encode($data);
	

	}
	public function VerCurso(){
		//var_dump('entra');
		$data = $this->curso->VerCurso();

		echo json_encode($data);

	}

	public function GuardarCurso($id) {
        $data = array(
			

			'IdCurso' => $this->input->post('IdCurso'),
			'IdUsuarioDNI'  => $_COOKIE['cookie_user'],
			'Estado' => $this->input->post('Estado')



        );
        
		// var_dump($data);

        $insert = $this->curso->GuardarCurso($data);
		// echo $insert;
         echo json_encode(array("id" => $insert));

	}

	public function BorrarCurso($IdCursoUsuario){
		// var_dump($idUsuario);
        $this->curso->BorrarCurso($IdCursoUsuario);              
        redirect('curso');
    }

}