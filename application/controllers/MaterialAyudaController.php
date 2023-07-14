<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('America/Lima');

class MaterialAyudaController extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->model('MaterialAyudaModal');
        $this->load->helper('text');
        $this->fecha = date("Y-m-d H:i:s");


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

    public function MostarVideoImagen() {   
        $data = $this->MaterialAyudaModal->MostarFotoyVideo();
        echo json_encode($data);
    }


    public function BorrarCurso($IdMaterialAyuda){
		// var_dump($idUsuario);
        $this->MaterialAyudaModal->BorrarCurso($IdMaterialAyuda);              
        redirect('material');
    }

    public function guardar_video() {
        $comentario = $this->input->post('descvideo');
        $video = $this->input->post('linkvideo');
        $this->MaterialAyudaModal->guardarVideo($video,$comentario);
        redirect('material');
    }

    public function guardar_imagen() {
        $Comentarios = $this->input->post('Comentarios');

        // var_dump($comentario);exit();
		$config['upload_path'] = './assets/images/uploads'; // Ruta donde guardar las imágenes
        $config['allowed_types'] = 'gif|jpg|png|'; // Tipos de archivos permitidos
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $uploaded_files = array();
        // var_dump($image_url);

        foreach ($_FILES['imagenes']['name'] as $key => $filename) {
		$_FILES['imagen']['name'] = $_FILES['imagenes']['name'][$key];
            $_FILES['imagen']['type'] = $_FILES['imagenes']['type'][$key];
            $_FILES['imagen']['tmp_name'] = $_FILES['imagenes']['tmp_name'][$key];
            $_FILES['imagen']['error'] = $_FILES['imagenes']['error'][$key];
            $_FILES['imagen']['size'] = $_FILES['imagenes']['size'][$key];
			// var_dump('<pre>',$config['upload_path']);

            if ($this->upload->do_upload('imagen')) {
				$uploaded_file_data = $this->upload->data();
                $file_name = $uploaded_file_data['file_name'];
                $file_path = $config['upload_path'] . '/' . $file_name;

                // Especificar el tamaño máximo deseado para la imagen en kilobytes (KB)
                $max_size_kb = 2000; // Por ejemplo, 200 KB

                // Obtener la URL completa de la imagen
                $file_name = $this->upload->data('file_name');
                $image_url = base_url('assets/images/uploads/' . $file_name);
                
                // Concatenar las URLs separadas por comas
                if (isset($image_urls)) {
                    $image_urls .= ' , ' . $file_path;
                } else {
                    $image_urls = $file_path;
                }

                // Cargar la imagen usando la biblioteca de manipulación de imágenes de CodeIgniter
                $this->load->library('image_lib');
                // Configurar la biblioteca para comprimir la imagen
                $compress_config['image_library'] = 'gd2';
                $compress_config['source_image'] = $uploaded_file_data['full_path'];
                $compress_config['quality'] = 90; // Porcentaje de calidad de compresión (0-100)
                $compress_config['max_size'] = $max_size_kb; // Tamaño máximo en kilobytes (KB)

                $this->image_lib->initialize($compress_config);

                if (!$this->image_lib->resize()) {
                    // Error al comprimir la imagen
                    $error = $this->image_lib->display_errors();
                    // Manejar el error adecuadamente
                }

                // Obtener la URL de la imagen comprimida
                $compressed_image_url = base_url($file_path);

                // Aquí puedes realizar las acciones necesarias con la URL de la imagen comprimida y guardarla en la base de datos

                $uploaded_files[] = $compressed_image_url;
            } else {
                // Error al subir la imagen
                $error = $this->upload->display_errors();
				// var_dump($error);
                // Manejar el error adecuadamente
            }
        }
        // var_dump($image_urls);
        // $this->load->model('tu_modelo');
        $this->MaterialAyudaModal->guardarImagenes($image_urls,$Comentarios);


        // Aquí puedes realizar las acciones necesarias con los nombres de los archivos subidos (por ejemplo, guardar en la base de datos)

        // Devolver la respuesta al cliente (puede ser un mensaje de éxito, un JSON, etc.)
        $response = array(
            'message' => 'Imágenes subidas correctamente',
            'files' => $uploaded_files
        );
        redirect('material');

        
    }
	
}