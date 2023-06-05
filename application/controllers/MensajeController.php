<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class MensajeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('MensajeModal', 'mensaje');
    }

    public function index() {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/head');

        $data['curso'] = $this->mensaje->VerCurso();
        $data['profesor'] = $this->mensaje->VerProfesor();

        $this->load->view('MensajeView', $data);
        $this->load->view('layout/footer', $data);
    }

    public function VerCurso(){
		//var_dump('entra');
		$data = $this->mensaje->VerCurso();

		echo json_encode($data);

	}
    public function VerProfesor(){
		//var_dump('entra');
		$data = $this->mensaje->VerProfesor();

		echo json_encode($data);

	}

    public function GuardarMensaje($id) {
        $data = array(
			

			// 'IdLogro' => $this->input->post('IdLogro'),
			'IdUsuarioDNI'  => $_COOKIE['cookie_user'],
			'IdRegistroProf' => $this->input->post('IdRegistroProf'),
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