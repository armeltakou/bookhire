<?php
/**
 * Created by PhpStorm.
 * User: Armel Takou
 * Date: 11/01/2019
 * Time: 11:39
 */

class Evenement extends CI_Controller
{
    public function Accueil(){
        //$this->header();
        $this->load->view('evenement/index');
        $this->footer();
    }

    public function DetailsEvenement(){
        //$this->header();
        $this->load->view('evenement/DetailEvenement');
        $this->footer();
    }

    public function header(){
        $this->load->view('evenement/header');
    }

    public function footer(){
        $this->load->view('evenement/footer');
    }
}