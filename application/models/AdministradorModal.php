<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorModal extends CI_Model {

    public function ValidarUsuario($DNI, $password)
    {
        $sql = "SELECT * FROM registro WHERE DNI = ? AND password = ?";
        $query = $this->db->query($sql, array($DNI, $password));
        return $query->row(); // Utilizar row() en lugar de result()
    }
    
    public function Cursoinscritos(){
        $sql = "SELECT
        cu.IdCursoUsuario,
        c.NombreCurso,
        cu.IdUsuarioDNI,
        CASE
          WHEN cu.Estado = 1 THEN 'Active'
          WHEN cu.Estado = 3 THEN 'Inactive'
        END AS Estado,
         CASE
          WHEN cu.IdRol = 1 THEN 'Estudiante'
          WHEN cu.IdRol = 2 THEN 'Profesor'
          WHEN cu.IdRol = 3 THEN 'Administrador'

        END AS Rol
      FROM
        cursousuario cu
      LEFT JOIN
        curso c ON c.IdCurso = cu.IdCurso
	   LEFT JOIN
         rol r On r.IdRol = cu.IdRol;";
        
        $query = $this->db->query($sql, array());
        return $query->result();
    }

    public function ActividadesBrindadas(){
        $sql = "SELECT 
        a.IdActividad, a.NombreActividad,a.Enunciado, c.NombreCurso, n.Nivel,
            CASE
          WHEN a.EstadoActividad = 1 THEN 'Active'
          WHEN a.EstadoActividad = 3 THEN 'Inactive'
        END AS EstadoActividad 
        from  actividad a
        left join Curso c ON c.IdCurso = a.IdCurso
        left join Nivel n on n.IdNivel = a.IdNivel;";
        $query = $this->db->query($sql, array());
        return $query->result();
    }
    
    public function BorrarCurso($IdCursoUsuario){
        $this->db->set('Estado',3);
        $this->db->where('IdCursoUsuario', $IdCursoUsuario);
        $this->db->update('cursousuario');
    }
    public function BorrarCursoActividad($IdActividad){
        $this->db->set('EstadoActividad',3);
        $this->db->where('IdActividad', $IdActividad);
        $this->db->update('actividad');
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
    public function VerCursoAct(){ 
        $sql="SELECT * FROM curso;";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function VerRegistroAct(){ 
        $sql="SELECT * FROM registro;";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function VerRol(){ 
        $sql="SELECT * FROM rol;";
        $query=$this->db->query($sql);
        return $query->result();
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

    public function GuardarAsignacion($data){
        $this->db->insert('cursousuario', $data);
        return $this->db->insert_id();
    }

    public function Ranking(){
        $sql = "SELECT 
        r.IdRanking,r.Alumno, g.NombreGrado, cp.NombreColegio, r.QTareasCompletadas
        from ranking r
        left join colegioprocedencia cp on cp.IdColegioProcedencia = r.IdColegioProcedencia
        left join Grado g on g.IdGrado = r.IdGrado;";
        
        $query = $this->db->query($sql, array());
        return $query->result();
    }

    public function editarAsignacion($IdCursoUsuario) {
        $this->db->from('cursousuario');
        $this->db->where('Idcursousuario', $IdCursoUsuario);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function actualizarAsignacion($IdCursoUsuario, $data) {
        $this->db->where('IdCursoUsuario', $IdCursoUsuario);
        $this->db->update('cursousuario', $data);
        return $this->db->affected_rows();
    }
    
    public function editarActividad($IdActividad) {
        $this->db->from('actividad');
        $this->db->where('IdActividad', $IdActividad);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function actualizarActividad($IdActividad, $data) {
        $this->db->where('IdActividad', $IdActividad);
        $this->db->update('actividad', $data);
        return $this->db->affected_rows();
    }
    

    
    
}
