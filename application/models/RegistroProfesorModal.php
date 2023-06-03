<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroProfesorModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
   
   

    public function guardarRegistro($data) {
        $this->db->insert('Registro', $data);
        return $this->db->insert_id();
    }
    



}
    