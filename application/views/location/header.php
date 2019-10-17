<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book-Hire</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Plateforme de reservation et de location">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php

    echo css("bootstrap4/bootstrap.min");
    echo css("font-awesome-4.7.0/css/font-awesome.min");
    echo css("OwlCarousel2-2.2.1/owl.carousel");
    echo css("OwlCarousel2-2.2.1/owl.theme.default");
    echo css("OwlCarousel2-2.2.1/animate");
    echo css("main_styles");
    echo css("responsive");
    echo css("news");
    echo css("news_responsive");
    echo css("rangeslider.js-2.3.0/rangeslider");

    ?>

</head>
<body>

<div class="super_container">

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo">
                        <a href="<?php echo site_url(array('Location','Accueil')) ?>" style="font-size: 1.5em; color: white;"><img src="<?php echo image_url('logoc.png'); ?>" style="width: 80px;" alt=""></a>
                    </div>
                    <nav class="main_nav" style="margin-left: 50px;">
                        <ul>
                            <li id="home" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Accueil')) ?>">Accueil</a></li>
                            <li id="fans" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Fanfare')) ?>">Fanfare</a></li>
                            <li id="artiste" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Artiste')) ?>">Artiste</a></li>
                            <li id="salle" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Salle')) ?>">Salle</a></li>
                            <li id="voiture" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Voiture')) ?>">Voiture</a></li>
                            <li id="ressources" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','Ressources')) ?>">Ressources</a></li>
                            <li id="groupe" style="margin-right: 20px;"><a href="<?php echo site_url(array('Location','GroupeDanse')) ?>">Groupe de danse</a></li>
                            <li id="diskjocker" style="margin-right: 50px;"><a href="<?php echo site_url(array('Location','DiskJocker')) ?>">Disk Jocker (DJ)</a></li>
                        </ul>
                    </nav>
                    <a href="<?php echo site_url(array('Welcome','index')) ?>">
                        <div class="phone_num ml-auto">
                            <div class="phone_num_inner">
                                <img src="<?php echo image_url('icon_4.png'); ?>" style="width: 30px;" alt=""><span>Menu</span>
                            </div>
                        </div>
                    </a>
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container"><div class="menu_close"></div></div>
        <div class="logo menu_logo">
            <a href="<?php echo site_url(array('Location','Accueil')) ?>">
                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                    <div class="logo_image"><div style="font-size: 1.5em; color: white;">Book-Hire<!--img src="<?php echo image_url('logos.png'); ?>" alt=""--></div></div>
                </div>
            </a>
        </div>
        <ul style="font-size: 0.5em;">
            <li id="home" class="menu_item"><a href="<?php echo site_url(array('Location','Accueil')) ?>">Accueil</a></li>
            <li id="salle" class="menu_item"><a href="<?php echo site_url(array('Location','Salle')) ?>">Salle</a></li>
            <li id="artiste" class="menu_item"><a href="<?php echo site_url(array('Location','Artiste')) ?>">Artiste</a></li>
            <li id="voiture" class="menu_item"><a href="<?php echo site_url(array('Location','Voiture')) ?>">Voiture</a></li>
            <li id="fans" class="menu_item"><a href="<?php echo site_url(array('Location','Fanfare')) ?>">Fanfare</a></li>
            <li id="ressources" class="menu_item"><a href="<?php echo site_url(array('Location','Ressources')) ?>">Ressources</a></li>
            <li id="diskjocker" class="menu_item"><a href="<?php echo site_url(array('Location','DiskJocker')) ?>">Disk Jocker (DJ)</a></li>
            <li id="groupe" class="menu_item"><a href="<?php echo site_url(array('Location','GroupeDanse')) ?>">Groupe de danse</a></li>
            <li class="menu_item"><a href="<?php echo site_url(array('Welcome','index')) ?>">Retour au menu principal</a></li>
        </ul>
    </div>
    <div class="menu_phone"><span>Contact : </span>698 235 339</div>
</div>

<!-- Home -->

<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slide -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(<?php echo image_url('banniere2.jpg'); ?>)"></div>
                <div class="slide_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slide_content">
                                    <div class="home_subtitle">Pour tout évènement!</div>
                                    <div class="home_title">Rechercher</div>
                                    <!--div class="home_details">
                                        <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div>
                                                <span> 2 salons</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div>
                                                <span> 5 chambres</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div>
                                                <span> 2 salles de bain</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="home_price">$ 300.000</div-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(<?php echo image_url('home_slider_1.jpg'); ?>)"></div>
                <div class="slide_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slide_content">
                                    <div class="home_subtitle">Offre spéciale</div>
                                    <div class="home_title">Villa</div>
                                    <div class="home_details">
                                        <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div>
                                                <span> 2 salons</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div>
                                                <span> 5 chambres</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div>
                                                <span> 2 salles de bain</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="home_price">$ 300.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(<?php echo image_url('home_slider_1.jpg'); ?>)"></div>
                <div class="slide_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slide_content">
                                    <div class="home_subtitle">Offre spéciale</div>
                                    <div class="home_title">Villa</div>
                                    <div class="home_details">
                                        <ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div>
                                                <span> 2 salons</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div>
                                                <span> 5 chambres</span>
                                            </li>
                                            <li>
                                                <div class="home_details_image"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div>
                                                <span> 2 salles de bain</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="home_price">$ 300.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Home Search -->
<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_content">
                        <form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
                            <div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
                                <div>
                                    <select class="search_form_select">
                                        <option disabled selected>Evènements</option>
                                        <option>Mariage</option>
                                        <option>Funérailles</option>
                                        <option>Anniversaire</option>
                                        <option>Concert</option>
                                        <option>Conférence</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="search_form_select">
                                        <option disabled selected>Lieu</option>
                                        <option>Libre</option>
                                        <option>Civil</option>
                                        <option>Religieux</option>
                                        <option>Plein air</option>
                                        <option>Salle</option>
                                        <option>Espace public</option>
                                        <option>Autres</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="search_form_select">
                                        <option disabled selected>Date de début</option>
                                        <option></option>
                                    </select>
                                </div>
                                <div>
                                    <select class="search_form_select">
                                        <option disabled selected>Heure de début</option>
                                        <option></option>
                                    </select>
                                </div>
                                <div>
                                    <select class="search_form_select">
                                        <option disabled selected>Date de fin</option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <button class="search_form_button ml-auto">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>