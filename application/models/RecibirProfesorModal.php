<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecibirProfesorModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function RecibirCorreo($idUsuario){
        $sql = "	SELECT
		c.IdCorreo,
		c.IdUsuarioDNI as De,
		r.NombreCompleto as Para,
		c.Asunto,
		c.Cuerpo,
		u.NombreCurso
	
	FROM
		correo c

		LEFT JOIN registro r ON r.IdRegistro = c.IdRegistroProf
		LEFT JOIN curso u ON u.IdCurso = c.IdCurso
	WHERE
		c.IdRegistroProf= 17 ;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }





}