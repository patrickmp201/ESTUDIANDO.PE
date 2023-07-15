<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class PaginaPrincipalAdministradorController extends CI_Controller {
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
        $data['curso'] = $this->admi->VerCurso();
        $data['nivel'] = $this->admi->VerNivel();
        $data['cursoAct'] = $this->admi->VerCursoAct();
        $data['rolAct'] = $this->admi->VerRol();
        $data['registroAct'] = $this->admi->VerRegistroAct();

		$this->load->view('PaginaPrincipalAdministradorView', $data);
		$this->load->view('layout/footerprofesor',$data);
		
	}	

	//CURSOS INSCRITOS
	
    public function Cursoinscritos() 
	{

		$data = $this->admi->Cursoinscritos();
		echo json_encode($data);
	

	}
    public function BorrarCurso($IdCursoUsuario){
		// var_dump($idUsuario);
        $this->admi->BorrarCurso($IdCursoUsuario);              
        redirect('principaladministrador');
    }

	public function GuardarAsignacion() {
        $data = array(
			

			'IdCursoUsuario' => $this->input->post('IdCursoUsuario'),
			'IdCurso' => $this->input->post('IdCurso'),
            'IdUsuarioDNI' => $this->input->post('IdUsuarioDNI'),
			'IdRol'  => $this->input->post('IdRol'),
			'Estado' => $this->input->post('Estado')



        );
        
        $insert = $this->admi->GuardarAsignacion($data);
		// echo $insert;
         echo json_encode(array("id" => $insert));

	}
	public function editar_asignacion($IdCursoUsuario) {
		$data = $this->admi->editarAsignacion($IdCursoUsuario);
		echo json_encode($data);
	}
	
	public function guardar_editado_asignacion($IdCursoUsuario) {
		$data = array(
			'IdCursoUsuario' => strtoupper($this->input->post('IdCursoUsuario')),
			'IdUsuarioDNI' => strtoupper($this->input->post('IdUsuarioDNI')),
			'IdCurso' => $this->input->post('IdCurso'),
			'IdRol' => $this->input->post('IdRol'),
			'Estado' => $this->input->post('Estado')
		);
	
		$this->admi->actualizarAsignacion($IdCursoUsuario, $data);
		echo json_encode(array("status" => TRUE));
	}
	




	//ACTIVIDADES


    public function ActividadesBrindadas() 
	{

		$data = $this->admi->ActividadesBrindadas();
		echo json_encode($data);
	

	}

    public function GuardarActividad() {
		$data = array(
			'IdActividad' => $this->input->post('IdActividad'),
			'NombreActividad' => $this->input->post('NombreActividad'),
			'Enunciado' => $this->input->post('Enunciado'),
			'IdCurso' => $this->input->post('IdCurso'),
			'IdNivel' => $this->input->post('IdNivel'),
			'EstadoActividad' => $this->input->post('EstadoActividad')

		);
	
		$IdAlternativa = $this->input->post('IdAlternativa');
		$Opciones = $this->input->post('Opciones');
		$IdRespuesta = $this->input->post('IdRespuesta');
	
		// Separar las opciones en un array
		$opciones_array = explode(",", $Opciones);
	
		$insert = $this->admi->GuardarActividad($data, $IdAlternativa, $opciones_array, $IdRespuesta);
		echo json_encode(array("id" => $insert));
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


	public function BorrarCursoActividad($IdActividad){
		// var_dump($idUsuario);
        $this->admi->BorrarCursoActividad($IdActividad);              
        redirect('principaladministrador');
    }




}