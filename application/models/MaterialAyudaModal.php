<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialAyudaModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->fecha = date("Y-m-d H:i:s");

    }


    public function guardarImagenes($image_urls,$descripcion){    
        // var_dump($_COOKIE["cookie_user"]);    
        $usuario = $_COOKIE["cookie_user"];
        $sql="INSERT INTO videosayuda (url,descripcion,fecha_registro,usuario_registro,tipo) 
              values ('$image_urls','$descripcion','$this->fecha','$usuario','imagen')" ;        
        $query=$this->db->query($sql);
        return $this->db->insert_id();  
    }

    public function guardarVideo($video,$descripcion){
        $usuario = $_COOKIE["cookie_user"];
        $sql="INSERT INTO videosayuda (url,descripcion,fecha_registro,usuario_registro,tipo) 
              values ('$video','$descripcion','$this->fecha','$usuario','video')" ;      
              var_dump($sql);  
        $query=$this->db->query($sql);
        return $this->db->insert_id();
    }

    public function BorrarCurso($IdMaterialAyuda){
        $this->db->set('estadomaterial',3);
        $this->db->where('IdMaterialAyuda', $IdMaterialAyuda);
        $this->db->update('materialayuda');
    }

    public function MostarFotoyVideo(){
        $sql ="SELECT 
        CASE tipo WHEN 'video' THEN SUBSTRING(url, 33, 11) ELSE url END AS url_id,
        DATE_FORMAT(fecha_registro, '%Y-%m-%d %H:%i:%s') AS fecha_subida, tipo,descripcion
    
    FROM videosayuda;";
        $query = $this->db->query($sql);
        //return $sql;
        return $query->result();
    }




}