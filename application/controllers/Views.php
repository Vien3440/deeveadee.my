
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Views
 *
 * @author vien34
 */
class Views extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
         $this->load->helper('url');
         
    }

    public function landingPageSocietes() {

        $this->load->model('Societe_Model');
        $data['societes'] = $this->Societe_Model->getSocietes();

        $this->load->view('template/header');
        $this->load->view('user/landingPageSocietes', $data);
        $this->load->view('template/footer');
    }

    public function landingPageSociete($num) {
       
        $this->load->view('template/header');
        $this->load->view('user/landingPageSociete');
        echo $num;
        $this->load->view('template/footer');
    }

}
