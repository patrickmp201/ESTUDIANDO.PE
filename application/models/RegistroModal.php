<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
   
   

    public function Grado(){ 
        $sql="SELECT * FROM grado ;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function Rol(){ 
        $sql="SELECT * FROM rol ;";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function ColegioProcedencia(){ 
        $sql="SELECT * FROM ColegioProcedencia ;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function guardarRegistro($data) {
        $this->db->insert('Registro', $data);
        return $this->db->insert_id();
    }
    



}
    