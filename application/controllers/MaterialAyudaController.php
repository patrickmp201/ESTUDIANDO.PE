<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class MaterialAyudaController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('MaterialAyudaModal', 'material');
    }

    public function index() {
        $data = array(
            'title' => "Principal",
            'js' => "assets/js/dashboard.js"
        );

        $this->load->view('layout/headprofesor');
        $this->load->view('MaterialAyudaView', $data);
        $this->load->view('layout/footerprofesor', $data);
    }

    public function GuardarMaterial($id) {
        $data = array(
			

			// 'IdLogro' => $this->input->post('IdLogro'),
			'IdUsuarioDNI'  => $_COOKIE['cookie_user'],
			'Comentarios' => $this->input->post('Comentarios'),
            'estadomaterial' => 1


        );
        
		// var_dump($data);

        $insert = $this->material->GuardarMaterial($data);
		// var_dump($insert);
         echo json_encode(array("id" => $insert));

	}
    


	public function MostrarMaterial($idUsuario) 
	{

		$data = $this->material->MostrarMaterial($idUsuario);
		echo json_encode($data);
	

	}

    public function BorrarCurso($IdMaterialAyuda){
		// var_dump($idUsuario);
        $this->material->BorrarCurso($IdMaterialAyuda);              
        redirect('material');
    }

	      // public function GuardarMaterial($id) {
    //     $mi_archivo = 'uploads'; // Cambia 'uploads' por 'uploads' si deseas que coincida con el atributo name del input de archivo
    //     $config['upload_path'] = "uploads"; // Ruta personalizada donde deseas almacenar los archivos
    //     $config['allowed_types'] = "jpg|png";
    //     $config['max_size'] = "50000";
    //     $config['max_width'] = "2000";
    //     $config['max_height'] = "2000";
    
    //     $this->load->library('upload', $config);
    //     var_dump($this->upload->data());
    
    //     if (!$this->upload->do_upload($mi_archivo)) {
    //         $error = $this->upload->display_errors();
    //         echo json_encode(array("error" => $error));
    //         return;
    //     }
    
    //     $upload_data = $this->upload->data();
    //     $imagen_nombre = $upload_data['file_name'];
    
    //     $data = array(
    //         'IdUsuarioDNI' => $_COOKIE['cookie_user'],
    //         'Comentarios' => $this->input->post('Comentarios'),
    //         'Imagen' => $imagen_nombre
    //     );
    
    //     $insert = $this->material->GuardarMaterial($data);
    //     echo json_encode(array("id" => $insert));
    // }
    
	
}