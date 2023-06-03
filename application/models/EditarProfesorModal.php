   
<?php

defined('BASEPATH') or exit('no existe un script para este');


class EditarProfesorModal extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function RegistroProfesorEditar($idUsuario){
   
        $sql = "SELECT 
        r.IdRegistro,r.NombreCompleto,r.Correo,r.Password,r.Celular,r.DNI, g.NombreGrado, cp.NombreColegio
        
        from registro r
        Left join ColegioProcedencia cp on cp.IdColegioProcedencia = r.IdColegioProcedencia
        Left join Grado g on g.IdGrado = r.IdGrado
        where r.DNI =  '$idUsuario' ;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }


    public function GuardarRegistro($id, $data){
        $this->db->where('IdRegistro', $id); 
        $this->db->update('registro', $data);
        return $this->db->affected_rows();
    }
    
}