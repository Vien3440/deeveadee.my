<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dvdModel
 *
 * @author vien34
 */
class Dvd_Model extends CI_Controller {


    /////create accesseurs 

     public function __construct() {
        $this->load->database();
    }
    
    public function get_Dvd() {
        $sql = "SELECT * FROM dvd";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
