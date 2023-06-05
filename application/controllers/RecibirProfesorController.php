<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class RecibirProfesorController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('RecibirProfesorModal', 'correo');
    }

    public function index() {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/headprofesor');
        $this->load->view('RecibirProfesorView', $data);
        $this->load->view('layout/footerprofesor', $data);
    }



	public function RecibirCorreo($idUsuario) 
	{

		$data = $this->correo->RecibirCorreo($idUsuario);
        // var_dump($data);
		echo json_encode($data);
	

	}

}