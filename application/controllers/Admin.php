<?php

class Admin extends CI_Controller
{
    public function index(){
        $this->load->view('admin/connexion/connexion');
    }

    public function Accueil ($page = 'accueil'){
        if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->header();
        $this->load->view('admin/'.$page, $data);
        //$this->load->view('admin/body');
        $this->footer();
    }

    public function header(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
    }

    public function footer(){
        $this->load->view('admin/footer');
    }

}