<?php

class Mariage extends CI_Controller
{
    public function Accueil(){
        //$this->header();
        $this->load->view('mariage/index');
        $this->footer();
    }

    public function header(){
        $this->load->view('mariage/header');
    }

    public function footer(){
        $this->load->view('mariage/footer');
    }
}