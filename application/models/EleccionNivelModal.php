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

    public function LlamadoAlternativa(){ 
        $sql = "SELECT * FROM alternativas;";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function ValidarChecklist($IdActividad){ 
        $sql = "SELECT * FROM resolucion WHERE IdActividad = '".$IdActividad."';";
        $query = $this->db->query($sql);
        return $query->result();


    }
    
    public function checklist_componente($IdActividad){
        $sql = "SELECT 
        r.IdResolucion, a.NombreActividad, al.Opciones
        FROM resolucion r
        LEFT JOIN Actividad a ON a.IdActividad = r.IdActividad
        LEFT JOIN Alternativas al ON al.IdAlternativa = r.IdAlternativa  
        WHERE r.IdActividad = '".$IdActividad."'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    

    public function guardarChecklistComponente($data){
        $this->db->insert('respuestaalumno', $data);
        return $this->db->insert_id();
    }

}

        // where n.Nivel  = '".$nivel."' and c.NombreCurso = '".$curso."'  ";
