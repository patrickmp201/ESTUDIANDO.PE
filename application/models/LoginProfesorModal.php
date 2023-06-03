<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginProfesorModal extends CI_Model {

    public function ValidarUsuario($DNI, $password)
    {
        $sql = "SELECT * FROM registro WHERE DNI = ? AND password = ?";
        $query = $this->db->query($sql, array($DNI, $password));
        return $query->row(); // Utilizar row() en lugar de result()
    }
    
    
    
    
}
