<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MensajeProfesorModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function VerCurso(){ 
        $sql="SELECT * FROM curso;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function VerAlumno(){ 
        $sql="SELECT 
        r.IdRegistro, r.NombreCompleto, r.DNI, rl.tiporol
        
        from Registro r
        left join rol rl on rl.IdRol = r.IdRol 
        where  r.IdRol = 1;";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function GuardarMensaje($data){
        $this->db->insert('correo', $data);
        return $this->db->insert_id();
    }



}