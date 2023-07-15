<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model {

    
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
}
