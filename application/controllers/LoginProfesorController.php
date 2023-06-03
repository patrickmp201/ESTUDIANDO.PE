<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class LoginProfesorController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('LoginProfesorModal', 'profesor');

	}
    public function index()
    {
        $this->load->view('layout/headprofesor');
		$this->load->view('LoginProfesorView');
		$this->load->view('layout/footerprofesor');
    }
    public function ValidarUsuario(){
        $DNI = $this->input->get('DNI');
        $password = $this->input->get('password');
        $IdRegistro = $this->input->get('IdRegistro');
        
        $data = $this->profesor->ValidarUsuario($DNI, $password,$IdRegistro);
    
        if (empty($data)) {
            echo json_encode(['error' => 'No se encuentra registrado']);
        } else {
            // Establecer la cookie
            setcookie('cookie_user', $DNI, time() + 3600, '/'); // Establecer la cookie con nombre 'cookie_user' y un tiempo de expiración de 1 hora
            echo json_encode(['success' => true]);
        }
    }

    
    
}