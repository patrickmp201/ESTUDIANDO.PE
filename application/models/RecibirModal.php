<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecibirModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function RecibirCorreoAlumno($idUsuario){
        $sql = "SELECT
		c.IdCorreo,
		c.IdRegistroProf as De,
		re.NombreCompleto as Para,
		c.Asunto,
		c.Cuerpo,
		u.NombreCurso
	
	FROM
		correo c

	
		LEFT JOIN registro re ON re.IdRegistro = c.IdRegistroAlum
		LEFT JOIN curso u ON u.IdCurso = c.IdCurso
	WHERE
		c.IdRegistroAlum= 1;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }





}