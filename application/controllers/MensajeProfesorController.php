<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class MensajeProfesorController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('MensajeProfesorModal', 'mensaje');
    }

    public function index() {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/headprofesor');

        $data['curso'] = $this->mensaje->VerCurso();
        $data['alumno'] = $this->mensaje->VerAlumno();

        $this->load->view('MensajeProfesorView', $data);
        $this->load->view('layout/footerprofesor', $data);
    }

    public function VerCurso(){
		//var_dump('entra');
		$data = $this->mensaje->VerCurso();

		echo json_encode($data);

	}
    public function VerAlumno(){
		//var_dump('entra');
		$data = $this->mensaje->VerAlumno();

		echo json_encode($data);

	}

    public function GuardarMensaje($id) {
        $data = array(
			

			// 'IdLogro' => $this->input->post('IdLogro'),
			'IdUsuarioDNI'  => $_COOKIE['cookie_user'],
			'IdRegistroAlum' => $this->input->post('IdRegistroAlum'),
            'IdCurso' => $this->input->post('IdCurso'),
            'Asunto' => $this->input->post('Asunto'),
            'Cuerpo' => $this->input->post('Cuerpo')
    


        );
        
		// var_dump($data);

        $insert = $this->mensaje->GuardarMensaje($data);
		// var_dump($insert);
         echo json_encode(array("id" => $insert));

	}

}