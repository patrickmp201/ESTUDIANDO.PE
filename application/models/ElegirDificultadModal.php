<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ElegirDificultadModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function Elegir(){
        $sql = "SELECT
         * from Nivel;";
        
        $query = $this->db->query($sql, array());
        return $query->result();
    }

}