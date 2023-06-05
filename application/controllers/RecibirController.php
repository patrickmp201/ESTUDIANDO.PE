<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class RecibirController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('RecibirModal', 'correo');
    }

    public function index() {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/head');
        $this->load->view('RecibirView', $data);
        $this->load->view('layout/footer', $data);
    }



	public function RecibirCorreoAlumno($idUsuario) 
	{

		$data = $this->correo->RecibirCorreoAlumno($idUsuario);
        // var_dump($data);
		echo json_encode($data);
	

	}
}