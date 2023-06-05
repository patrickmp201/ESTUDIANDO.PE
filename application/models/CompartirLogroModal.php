<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompartirLogroModal extends CI_Model {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function GurdarLogro($data){
        $this->db->insert('logro', $data);
        return $this->db->insert_id();
    }


    public function MostrarLogros($idUsuario){
        $sql = "SELECT * FROM LOGRO;";
        
        $query = $this->db->query($sql, array($idUsuario));
        return $query->result();
    }




}