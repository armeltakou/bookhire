<?php

class Location extends CI_Controller
{
    public function Accueil(){
        $this->header();
        $this->load->view('location/index');
        $this->footer();
    }

    public function DiskJocker(){
        $data['titre']="DiskJocker";
        $this->load->view('location/headers',$data);
        $this->load->view('location/DiskJocker');
        $this->footer();
    }

    public function DetailsDiskJocker(){
        $data['titre']="DiskJocker";
        $data['soustitre']="Details DiskJocker";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsDiskJocker');
        $this->load->view('location/footerDetails');
    }

    public function DetailsFanfare(){
        $data['titre']="Fanfare";
        $data['soustitre']="Details Fanfare";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsFanfare');
        $this->load->view('location/footerDetails');
    }

    public function DetailsArtiste(){
        $data['titre']="Artiste";
        $data['soustitre']="Details Artiste";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsArtiste');
        $this->load->view('location/footerDetails');
    }

    public function DetailsSalle(){
        $data['titre']="Salle";
        $data['soustitre']="Details Salle";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsSalle');
        $this->load->view('location/footerDetails');
    }

    public function DetailsVoiture(){
        $data['titre']="Voiture";
        $data['soustitre']="Details Voiture";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsVoiture');
        $this->load->view('location/footerDetails');
    }

    public function DetailsRessources(){
        $data['titre']="Ressources";
        $data['soustitre']="Details Ressources";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsRessources');
        $this->load->view('location/footerDetails');
    }

    public function DetailsGroupeDanse(){
        $data['titre']="GroupeDanse";
        $data['soustitre']="Details GroupeDanse";
        $this->load->view('location/headerDetails',$data);
        $this->load->view('location/DetailsGroupeDanse');
        $this->load->view('location/footerDetails');
    }

    public function GroupeDanse(){
        $data['titre']="Groupe de Danse";
        $this->load->view('location/headers',$data);
        $this->load->view('location/GroupeDanse');
        $this->footer();
    }

    public function Artiste(){
        $data['titre']="Artiste";
        $this->load->view('location/headers',$data);
        $this->load->view('location/Artiste');
        $this->footer();
    }

    public function Fanfare(){
        $data['titre']="Fanfare";
        $this->load->view('location/headers',$data);
        $this->load->view('location/Fanfare');
        $this->footer();
    }

    public function Voiture(){
        $data['titre']="Voiture";
        $this->load->view('location/headers',$data);
        $this->load->view('location/Voiture');
        $this->footer();
    }

    public function Salle(){
        $data['titre']="Salle";
        $this->load->view('location/headers',$data);
        $this->load->view('location/Salle');
        $this->footer();
    }

    public function Ressources(){
        $data['titre']="Ressource";
        $this->load->view('location/headers',$data);
        $this->load->view('location/Ressources');
        $this->footer();
    }

    public function header(){
        $this->load->view('location/header');
    }

    /*public function headers($data){
        $this->load->view('location/headers',$data);
    }*/

    public function footer(){
        $this->load->view('location/footer');
    }
}