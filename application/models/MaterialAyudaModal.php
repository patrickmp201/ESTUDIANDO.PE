<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialAyudaModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function GuardarMaterial($data){
        $this->db->insert('materialayuda', $data);
        return $this->db->insert_id();
    }


    public function MostrarMaterial($idUsuario){
        $sql = "SELECT * FROM materialayuda where estadomaterial = 1;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }

    public function BorrarCurso($IdMaterialAyuda){
        $this->db->set('estadomaterial',3);
        $this->db->where('IdMaterialAyuda', $IdMaterialAyuda);
        $this->db->update('materialayuda');
    }




}