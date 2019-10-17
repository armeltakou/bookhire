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
    echo css("rangeslider.js-2.3.0/rangeslider");
    echo css("property");
    echo css("property_responsive");
    echo css("about");
    echo css("about_responsive");

    ?>
</head>
<body>

<div class="super_container">

	<!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo">
                            <a href="<?php echo site_url(array('Evenement','Accueil')) ?>" style="font-size: 1.5em; color: white;">Book-Hire<!--img src="<?php echo image_url('logos.png'); ?>" alt=""--></a>
                        </div>
                        <!--nav class="main_nav" style="margin-left: 100px;">
							<ul>
								<li class="active" style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','Accueil')) ?>">Accueil</a></li>
								<li style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','Seminaire')) ?>">Séminaire</a></li>
								<li style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','Anniversaire')) ?>">Anniversaire</a></li>
								<li style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','Concert')) ?>">Concert</a></li>
								<li style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','Conference')) ?>">Conférence</a></li>
								<li style="margin-right: 30px;"><a href="<?php echo site_url(array('Evenement','CeremonieFunebre')) ?>">Cérémonie funèbre</a></li>
							</ul>
						</nav-->

                        <div class="phone_num ml-auto">
                            <div class="phone_num_inner">
                                <a href="<?php echo site_url(array('Welcome','index')) ?>">
                                    <img src="<?php echo image_url('icon_4.png'); ?>" style="width: 30px;" alt=""><span>Menu</span>
                                </a>
                            </div>
                        </div>
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
                <a href="<?php echo site_url(array('Evenement','Accueil')) ?>">
                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div style="font-size: 1.5em; color: white;">Book-Hire<!--img src="<?php echo image_url('logos.png'); ?>" alt=""--></div></div>
                    </div>
                </a>
            </div>
            <ul style="font-size: 0.5em;">
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','Accueil')) ?>">Accueil</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','Concert')) ?>">Concert</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','Seminaire')) ?>">Séminaire</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','Conference')) ?>">Conférence</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','Anniversaire')) ?>">Anniversaire</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Evenement','CeremonieFunebre')) ?>">Cérémonie funèbre</a></li>
                <li class="menu_item"><a href="<?php echo site_url(array('Welcome','index')) ?>">Retour au menu principal</a></li>
            </ul>
        </div>
        <div class="menu_phone"><span>Contact : </span>698 235 339</div>
    </div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo image_url(''); ?>properties.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Search results</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="<?php echo site_url(array('Evenement','Accueil')) ?>">Accueil</a></li>
									<li>Resultat</li>
								</ul>
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

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
                    <div class="section_title">Evènement : Mariage</div>
                    <div class="section_subtitle">Résultats possibles associés à l'évnèment</div>
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">

                        <div class="row milestones_row">

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo image_url(''); ?>milestones_1.png" alt=""></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="651">0</div>
                                        <div class="milestone_text">Properties Sold</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo image_url(''); ?>milestones_2.png" alt=""></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="1256">0</div>
                                        <div class="milestone_text">Happy Clients</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo image_url(''); ?>milestones_3.png" alt=""></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="124">0</div>
                                        <div class="milestone_text">Buildings Sold</div>
                                    </div>

                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone d-flex flex-row align-items-center justify-content-start">
                                    <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="<?php echo image_url(''); ?>milestones_4.png" alt=""></div>
                                    <div class="milestone_content">
                                        <div class="milestone_counter" data-end-value="25">0</div>
                                        <div class="milestone_text">Awards Won</div>
                                    </div>
                                </div>
                            </div>

                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="<?php echo image_url(''); ?>intro_1.jpg" alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="<?php echo image_url(''); ?>intro_1.jpg" alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="<?php echo image_url(''); ?>intro_1.jpg" alt=""></div>
			</div>

			<!-- Intro Slider Nav -->
			<div class="intro_slider_nav_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
								<div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
								<div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Property -->

	<div class="property">
		<div class="container">
			<div class="row">
				
				<!-- Sidebar -->

				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar_search">
							<div class="sidebar_search_title">Search your home</div>
							<div class="sidebar_search_form_container">
								<form action="#" class="sidebar_search_form" id="sidebar_search_form">
									<select class="sidebar_search_select">
										<option disabled selected>Keywords</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property ID</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property Status</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>City</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<select class="sidebar_search_select">
										<option disabled selected>Property Type</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
										<option>Option</option>
									</select>
									<div class="row sidebar_search_row">
										<div class="col-lg-6">
											<input type="text" class="sidebar_search_input" placeholder="Bedrooms No">
										</div>
										<div class="col-lg-6">
											<input type="text" class="sidebar_search_input" placeholder="Bathrooms No">
										</div>
									</div>

									<!-- Filter Price -->
									<div class="price_filter">
										<div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
											<div>Min Price</div>
											<div class="ml-auto">Max Price</div>
										</div>
										<input type="range" min="0" max="1000" step="10" value="250" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
									</div>

									<!-- Filter Area -->
									<div class="area_filter">
										<div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
											<div>Min Price</div>
											<div class="ml-auto">Max Price</div>
										</div>
										<input type="range" min="0" max="1000" step="10" value="300" data-rangeslider="" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
									</div>
									<button class="sidebar_search_button search_form_button">search</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Property Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="property_content">

						<!-- Description -->

						<div class="property_description">
							<div class="property_title">Description</div>
							<div class="property_text property_text_2">
								<p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam. Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam</p>
							</div>
						</div>

						<!-- Additional Details -->

						<div class="additional_details">
							<div class="property_title">Additional Details</div>
							<div class="details_container">
								<ul>
									<li><span>bedroom features: </span>Main Floor Master Bedroom, Walk-In Closet</li>
									<li><span>dining area: </span>Breakfast Counter/Bar, Living/Dining Combo</li>
									<li><span>doors & windows: </span>Bay Window</li>
									<li><span>entry location: </span>Mid Level</li>
									<li><span>floors: </span>Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>