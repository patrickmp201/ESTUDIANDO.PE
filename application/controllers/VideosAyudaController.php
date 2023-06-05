<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class VideosAyudaController extends CI_Controller
{
    function __construct(){
		parent::__construct();		
		$this->load->model('VideosAyudaModal');
		$this->load->helper('text');
        $this->fecha = date("Y-m-d H:i:s");
	}
    public function index()
    {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/head');
        $this->load->view('VideosAyudaView', $data);
        $this->load->view('layout/footer', $data);
    }

    public function guardar_video() {
        $comentario = $this->input->post('descvideo');
        $video = $this->input->post('linkvideo');
        $this->VideosAyudaModal->guardarVideo($video,$comentario);
        redirect('materialvideo');
    }

    public function MostarVideoImagen(){
        // var_dump(123);
        
        $data = $this->VideosAyudaModal->MostarFotoyVideo();
		echo json_encode($data);
    }
        

    
}
