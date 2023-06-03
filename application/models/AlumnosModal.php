<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnosModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function tablaAlumno(){ 
        $sql="SELECT * From alumnos;";
        $query=$this->db->query($sql);
        return $query->result();
    }



}