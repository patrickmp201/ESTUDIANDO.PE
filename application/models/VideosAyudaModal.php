
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideosAyudaModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->fecha = date("Y-m-d H:i:s");
        

    }

    public function guardarVideo($video,$descripcion){
        $usuario = $_COOKIE["cookie_user"];
        $sql="INSERT INTO videosayuda (url,descripcion,fecha_registro,usuario_registro,tipo) 
              values ('$video','$descripcion','$this->fecha','$usuario','video')" ;      
            //   var_dump($sql);  
        $query=$this->db->query($sql);
        return $this->db->insert_id();
    }

    public function MostarFotoyVideo(){
        $sql ="SELECT 
        CASE tipo WHEN 'video' THEN SUBSTRING(url, 33, 11) ELSE url END AS url_id,
        DATE_FORMAT(fecha_registro, '%Y-%m-%d %H:%i:%s') AS fecha_subida, tipo,descripcion
    
    FROM videosayuda
   ;";
        $query = $this->db->query($sql);
        //return $sql;
        return $query->result();
    }

}