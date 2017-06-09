<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of societe_Model
 *
 * @author vien34
 */
class Societe_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getSocietes() {
        $sql = "select societe.id_societe , societe.nom , societe.img , adresse.ville FROM societe 
                INNER JOIN adresse 
                ON societe.fk_adresse = adresse.id_adresse";
        $query = $this->db->query($sql);
        
               $societes = $query->result_array();
               return $societes;
        
        
    }

}
