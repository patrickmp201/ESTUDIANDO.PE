<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EleccionNivelModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Niveles($nivel,$curso){
        $sql = "SELECT
        a.IdActividad,a.NombreActividad,a.Enunciado,c.NombreCurso,n.Nivel
        
        from Actividad a
        left join Curso c on c.IdCurso = a.IdCurso
        Left join Nivel n on n.IdNiVEL = a.IdNivel;";
        
        $query = $this->db->query($sql, array());
        return $query->result();
    }
    
    public function VerCurso(){ 
        $sql="SELECT * FROM curso;";
        $query=$this->db->query($sql);
        return $query->result();
    }
}

        // where n.Nivel  = '".$nivel."' and c.NombreCurso = '".$curso."'  ";
