<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CursoModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCursosUsuario($idUsuario){
        $sql = "SELECT r.Correo, c.NombreCurso, cu.IdCursoUsuario,
        CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END AS Estado
        FROM CursoUsuario cu
        LEFT JOIN curso c ON c.IdCurso = cu.Idcurso
        LEFT JOIN registro r ON r.DNI = cu.IdUsuarioDNI
        WHERE cu.IdUsuarioDNI = '$idUsuario' AND cu.Estado <> 3;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }
    
    public function VerCurso(){ 
        $sql="SELECT * FROM curso;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function GuardarCurso($data){
        $this->db->insert('cursousuario', $data);
        return $this->db->insert_id();
    }

    public function BorrarCurso($IdCursoUsuario){
        $this->db->set('Estado',3);
        $this->db->where('IdCursoUsuario', $IdCursoUsuario);
        $this->db->update('cursousuario');
    }



}