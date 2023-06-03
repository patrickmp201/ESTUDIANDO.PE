<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class CursoProfesorController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('CursoProfesorModal', 'curso');

	}

	public function index(){	        
        


        $data = array(
			'title' => "Principal",
			'js' => "assets/js/dashboard.js"
		);
		
		$this->load->view('layout/headprofesor');
        $data['curso'] = $this->curso->VerCurso();
        $data['nivel'] = $this->curso->VerNivel();

		$this->load->view('CursoProfesorView', $data);
		$this->load->view('layout/footerprofesor',$data);
		
	}	
    public function Cursoinscritos() 
	{

		$data = $this->curso->getCursosUsuario();
		echo json_encode($data);
	

	}

    public function GuardarCurso() {
        $data = array(
			

			'IdCurso' => $this->input->post('IdCurso'),
			'NombreCurso'  => $this->input->post('NombreCurso'),
			'EstadoCurso' => $this->input->post('EstadoCurso')


        );
        
		// var_dump($data);

        $insert = $this->curso->GuardarCurso($data);
		// echo $insert;
         echo json_encode(array("id" => $insert));

	}
	public function GuardarActividad() {
		$data = array(
			'IdActividad' => $this->input->post('IdActividad'),
			'NombreActividad' => $this->input->post('NombreActividad'),
			'Enunciado' => $this->input->post('Enunciado'),
			'IdCurso' => $this->input->post('IdCurso'),
			'IdNivel' => $this->input->post('IdNivel')
		);
	
		$IdAlternativa = $this->input->post('IdAlternativa');
		$Opciones = $this->input->post('Opciones');
		$IdRespuesta = $this->input->post('IdRespuesta');
	
		// Separar las opciones en un array
		$opciones_array = explode(",", $Opciones);
	
		$insert = $this->curso->GuardarActividad($data, $IdAlternativa, $opciones_array, $IdRespuesta);
		echo json_encode(array("id" => $insert));
	}
	
	public function listadoCurso(){
		// var_dump($CodigoContrato);
		$NombreCurso = $this->input->post('NombreCurso');
		

		$data = $this->curso->listadoCurso($NombreCurso);        
		echo json_encode($data);
	}


	public function BorrarCurso($IdCurso){
		// var_dump($idUsuario);
        $this->curso->BorrarCurso($IdCurso);              
        redirect('cursoprofesor');
    }

    public function VerCurso(){
		//var_dump('entra');
		$data = $this->curso->VerCurso();

		echo json_encode($data);

	}

    public function VerNivel(){
		//var_dump('entra');
		$data = $this->curso->VerNivel();

		echo json_encode($data);

	}

}