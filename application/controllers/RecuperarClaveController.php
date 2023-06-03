<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Lima');

class RecuperarClaveController extends CI_Controller {
	function __construct(){
		parent::__construct();			
        $this->load->model('RecuperarClaveModal', 'recuperar');

	}
    public function index()
    {

        $this->load->view('RecuperarClaveView');
  

    }
    
}