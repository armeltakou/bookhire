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
							<a href="<?php echo site_url(array('Evenement','Accueil')) ?>" style="font-size: 1.5em; color: white;"><img src="<?php echo image_url('logoc.png'); ?>" style="width: 80px;" alt=""></a>
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

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
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

	<!-- Recent -->

	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Les plus sollicités</div>
					<div class="section_subtitle">Les évènements dont nous recevons plus de demande</div>
				</div>
			</div>
			<div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('property_1.jpg'); ?>" alt="">
											<div class="tag_featured property_tag"><a href="#">Featured</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Miami</div>
											<div class="recent_item_title"><a href="<?php echo site_url(array('Evenement','DetailsEvenement')) ?>">Sea view property</a></div>
											<div class="recent_item_price">$ 1. 234 981</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div><span>650 Ftsq</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div><span>3 Bedrooms</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div><span>3 Bathrooms</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('property_2.jpg'); ?>" alt="">
											<div class="tag_offer property_tag"><a href="#">Offer</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Los Angeles</div>
											<div class="recent_item_title"><a href="<?php echo site_url(array('Evenement','DetailsEvenement')) ?>">2 Floor Town House</a></div>
											<div class="recent_item_price">$ 1. 234 981</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div><span>650 Ftsq</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div><span>3 Bedrooms</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div><span>3 Bathrooms</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="<?php echo image_url('property_3.jpg'); ?>" alt="">
											<div class="tag_featured property_tag"><a href="#">Featured</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Florida</div>
											<div class="recent_item_title"><a href="<?php echo site_url(array('Evenement','DetailsEvenement')) ?>">Vacation Home</a></div>
											<div class="recent_item_price">$ 1. 234 981</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_1.png'); ?>" alt=""></div><span>650 Ftsq</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_2.png'); ?>" alt=""></div><span>3 Bedrooms</span></div>
											<div><div class="recent_icon"><img src="<?php echo image_url('icon_3.png'); ?>" alt=""></div><span>3 Bathrooms</span></div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="recent_slider_nav recent_slider_prev" style="width: 100px;"><i class="fa fa-chevron-left" aria-hidden="true"></i> Précédent</div>
							<div class="recent_slider_nav recent_slider_next" style="width: 100px;"> Suivant <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="button recent_button"><a href="#">Voir +</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cities -->

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Nos récentes activités</div>
					<div class="section_subtitle">Les activités dont nous avons eu l'honneur d'organiser</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_1.jpg'); ?>" alt="https://unsplash.com/@dnevozhai">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_2.jpg'); ?>" alt="https://unsplash.com/@lachlanjdempsey">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Anniversaire | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_3.jpg'); ?>" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_4.jpg'); ?>" alt="https://unsplash.com/@justinbissonbeck">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_5.jpg'); ?>" alt="https://unsplash.com/@claudiotrigueros">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_6.jpg'); ?>" alt="https://unsplash.com/@andersjilden">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_7.jpg'); ?>" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>

			<!-- City -->
			<div class="city">
				<img src="<?php echo image_url('city_8.jpg'); ?>" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Evènements</div>
						<div class="city_subtitle">Mariage Etat Civil | Yaoundé</div>
					</a>	
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<!--div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">What our clients say</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row testimonials_row">

				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Amazing home for me</div>
						<div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="<?php echo image_url('testimonial_1.jpg'); ?>" alt=""></div>
						<div class="testimonial_author"><a href="#">Diane Smith</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
						<div class="testimonial_author_image"><img src="<?php echo image_url('testimonial_2.jpg'); ?>" alt=""></div>
						<div class="testimonial_author"><a href="#">Michael Duncan</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="<?php echo image_url('testimonial_3.jpg'); ?>" alt=""></div>
						<div class="testimonial_author"><a href="#">Shawn Gaines</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

			</div>
		</div>
	</div-->