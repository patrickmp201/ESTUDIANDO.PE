

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CursoProfesorModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCursosUsuario(){
        $sql = "SELECT c.IdCurso, c.NombreCurso,
         CASE WHEN EstadoCurso = 1 THEN 'Activo' ELSE 'Inactivo' END AS Estado

         from curso c
         Where c.EstadoCurso <>3;";
        
        $query = $this->db->query($sql, array());
        return $query->result();
    }
    
    public function GuardarCurso($data){
        $this->db->insert('curso', $data);
        return $this->db->insert_id();
    }

    public function GuardarActividad($data, $IdAlternativa, $opciones_array, $IdRespuesta) {
        $this->db->insert('actividad', $data);
        $actividad_id = $this->db->insert_id();
    
        // Guardar IdAlternativa y cada opción en filas separadas en la tabla Alternativas
        foreach ($opciones_array as $opcion) {
            $alternativa_data = array(
                'IdAlternativa' => $IdAlternativa,
                'Opciones' => $opcion,
            );
            $this->db->insert('Alternativas', $alternativa_data);
    
            if ($opcion == $IdRespuesta) {
                $alternativa_id = $this->db->insert_id();
            }
        }
    
        // Guardar actividad_id, alternativa_id y IdRespuesta en una fila en la tabla Respuesta
        $respuesta_data = array(
            'IdActividad' => $actividad_id,
            'IdAlternativa' => $alternativa_id,
            'IdRespuesta' => $IdRespuesta,
        );
        $this->db->insert('Respuesta', $respuesta_data);
    
        return $actividad_id;
    }

    public function listadoCurso($NombreCurso)
    {

        $sql = "SELECT 
        r.IdRespuesta, a.NombreActividad,a.Enunciado, n.Nivel,c.NombreCurso,al.Opciones as Respuesta
        from Respuesta r
        left join actividad a on a.IdActividad = r.IdActividad
        left join alternativas al on al.IdAlternativa = r.IdAlternativa
        left join nivel n on n.IdNivel = a.IdNivel
        Left join curso c on c.IdCurso = a.IdCurso
      
		Where c.NombreCurso = '$NombreCurso' ;";
        $query = $this->db->query($sql);
        //return $sql;
        return $query->result();
    }

    


    

    public function BorrarCurso($IdCurso){
        $this->db->set('EstadoCurso',3);
        $this->db->where('IdCurso', $IdCurso);
        $this->db->update('curso');
    }

    public function VerCurso(){ 
        $sql="SELECT * FROM curso;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function VerNivel(){ 
        $sql="SELECT * FROM nivel;";
        $query=$this->db->query($sql);
        return $query->result();
    }


}