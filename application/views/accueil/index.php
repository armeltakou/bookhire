<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Book-Hire</title>

    <?php

    echo bootstrapcss("bootstrap.min");
    echo css("font-awesome.min");
    echo css("animate");
    echo css("style");

    echo js("jquery-2.1.1.min");
    echo bootstrapjs("bootstrap.min");
    echo js("jquery.appear");
    echo js("jqBootstrapValidation");
    echo js("modernizr.custom");
    echo js("script");

    ?>

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<section id="logo-section" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#">
                    <div class="logo text-center">
                        <h1>Book-Hire</h1>
                        <span>Beaucoup plus simple que vous ne l'imaginez !</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="mainbody-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="menu-item blue">
                    <a href="<?php echo site_url(array('Evenement','Accueil')); ?>">
                        <i class="fa fa-magic"></i>
                        <p>Evènementiel</p>
                    </a>
                </div>
                <div class="menu-item green">
                    <a href="#portfolio-modal" data-toggle="modal">
                        <i class="fa fa-file-photo-o"></i>
                        <p>Galerie</p>
                    </a>
                </div>
                <div class="menu-item light-red">
                    <a href="#about-modal" data-toggle="modal">
                        <i class="fa fa-user"></i>
                        <p>A propos</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item color">
                    <a href="<?php echo site_url(array('Mariage','Accueil')); ?>">
                        <i class="fa fa-area-chart"></i>
                        <p>Mariages</p>
                    </a>
                </div>
                <div class="menu-item light-red">
                    <a href="#contact-modal" data-toggle="modal">
                        <i class="fa fa-envelope-o"></i>
                        <p>Contacts</p>
                    </a>
                </div>
                <div class="menu-item purple">
                    <a href="#pricing-modal" data-toggle="modal">
                        <i class="fa fa-usd"></i>
                        <p>Partenaires</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menu-item blue">
                    <a href="<?php echo site_url(array('Location','Accueil')); ?>">
                        <i class="fa fa-edit"></i>
                        <p>Locations</p>
                    </a>
                </div>
                <div class="menu-item light-orange">
                    <a href="#team-modal" data-toggle="modal">
                        <i class="fa fa-users"></i>
                        <p>L'équipe</p>
                    </a>
                </div>
                <div class="menu-item color">
                    <a href="#clients-modal" data-toggle="modal">
                        <i class="fa fa-comment-o"></i>
                        <p>Témoignages</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>Design & Developed by <a href="http://www.kenawekofficiel.000webhostapp.com/" target="_blank">Ken@wek</a></div>
            </div>
        </div>
    </div>
</div>

<div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Our Awesome Feature</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-magic"></i>
                        <div class="feature-content">
                            <h4>Web Design</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-gift"></i>
                        <div class="feature-content">
                            <h4>Graphics Design</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-wordpress"></i>
                        <div class="feature-content">
                            <h4>Wordpress Theme</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-plug"></i>
                        <div class="feature-content">
                            <h4>Wordpress Plugin</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-joomla"></i>
                        <div class="feature-content">
                            <h4>Joomla Template</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-cube"></i>
                        <div class="feature-content">
                            <h4>Joomla Extension</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-css3"></i>
                        <div class="feature-content">
                            <h4>HTML 5 & CSS3</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-android"></i>
                        <div class="feature-content">
                            <h4>Android Apps</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Galerie photo</h3>
                    <p>Toutes nos activités en images</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/1.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/2.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/3.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/4.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/5.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/6.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/7.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/8.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/9.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/10.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/11.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="<?php echo img_url('portfolio/12.png'); ?>" class="img-responsive" alt="...">
                        <div class="portfolio-details text-center">
                            <h4>Project Name</h4>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>A propos de nous</h3>
                    <p>Quelques informations nous concernant, nos compétances et nos idéaux</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-magic pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Signification</h4>
                                        <p>kenawek veut dire révolution informatique.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-css3 pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Logo</h4>
                                        <p>Un papillon symbolisant la "mutation" technologique</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-wordpress pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Keneweker</h4>
                                        <p>Nom porté par les membres du groupe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="skill-shortcode">

                        <div class="skill">
                            <p>Développement WEB</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="60">
                                    <span class="progress-bar-span">60%</span>
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Développement Mobile</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="95">
                                    <span class="progress-bar-span">95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Systèmes & Réseaux</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="80">
                                    <span class="progress-bar-span">80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Design & Infographie</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Marketing</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="70">
                                    <span class="progress-bar-span">70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-tab">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Idéologie</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab">Logo</a></li>
                            <li><a href="#tab-3" role="tab" data-toggle="tab">Keneweker</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <p>Révolution Informatique</p>
                                <p>Le nom du groupe ken@wek tire son origine de deux mots de la langue afrikaans parlé particulièrement
                                    en Afrique du Sud : rekenaar pour ordinateur et wekker pour réveil d'où on retient les termes <strong>kena</strong>
                                    d'une part et <strong>wek</strong> d'autres part pour finalement former le mot <strong>kenawek</strong> auquel nous attribuons la
                                    signification de <strong>révolution informatique</strong>.</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <p>Un papillon</p>
                                <p>Le logo est un papillon symbolisant la mutation, l’évolution dont les couleurs marquent la transformation
                                    transversal progressive pour parvenir au développement de l'Afrique par le biais de la révolution informatique.</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <p>Keneweker</p>
                                <p>Nom porté par les membres du groupe, reflétant la détermination de surmonter tous les obstacles, d'apporter
                                    sa cote part dans la force résultante afin de parvenir à la transformation et à l'amélioration de sa
                                    condition de vie et de celle des autres.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-modal modal fade" id="pricing-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="pricing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Free</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Standard</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Premium</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Professional</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                    <li>40 GB Storage</li>
                                    <li>40GB Transfer</li>
                                    <li>10 Domains</li>
                                    <li>20 Projects</li>
                                    <li>Free installation</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>L'équipe projet</h3>
                    <p>Les membres qui ont participé activement à la création et la réalisation de ce projet</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-1.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-2.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-3.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-4.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-1.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-2.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-3.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo img_url('team/team-4.jpg'); ?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4>John Doe</h4>
                            <div class="designation">Senior Web Developer</div>
                            <ul style="text-align: center;">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Nous contacter</h3>
                    <p>Localisation, Contact, Message, Horaire</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contacts info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> <a href="#" class="__cf_email__" data-cfemail="8ff6e0fafda2eae2eee6e3cfe2eee6e3a1ece0e2">support@kenawek.com</a></li>
                            <li><strong>Phone :</strong> (+237) 698 235 339</li>
                            <li><strong>Mobile :</strong> (+237) 698 813 857</li>
                            <li><strong>Web :</strong> kenawek.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-social text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Horaire de travail</h4>
                        <ul>
                            <li><strong>Lun-Mer :</strong> 7h - 14h</li>
                            <li><strong>Jeu-Ven :</strong> 8h - 13h</li>
                            <li><strong>Sam :</strong> 12h - 16h</li>
                            <li><strong>Dim :</strong> Fermé</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 80px;">
                <div class="col-md-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre nom *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Votre contact *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-modal modal fade contact" id="clients-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Les témoignages des clients</h3>
                    <p>Quelques témoignages recceuilis au-près des clients</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clients">
                        <img src="<?php echo img_url('team/manage-1.png'); ?>" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clients">
                        <img src="<?php echo img_url('team/manage-2.png'); ?>" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clients">
                        <img src="<?php echo img_url('team/manage-3.png'); ?>" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clients">
                        <img src="<?php echo img_url('/team/manage-4.png'); ?>" class="img-responsive" alt="...">
                        <h4>John Doe</h4>
                        <div class="speech">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>

</html>