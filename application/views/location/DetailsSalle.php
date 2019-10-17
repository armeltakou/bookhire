
    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo image_url('salle/Salle-fetes-ceremonies.jpg'); ?>" style="background-size: cover;" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="home_title"><?php echo $titre; ?></div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="<?php echo site_url(array('Location','Accueil')) ?>">Accueil</a></li>
                                    <li><a href="<?php echo site_url(array('Location',$titre)) ?>"><?php echo $titre; ?></a></li>
                                    <li><?php echo $soustitre; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-6">
					<div class="news_posts">

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
								<div><div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
									<div class="news_post_day">1</div>
									<div class="news_post_month">Apr '18</div>
								</div></div>
								<div class="news_post_title_content">
									<div class="news_post_title"><a href="#">Salle de fête</a></div>
									<div class="news_post_info">
										<ul>
											<li>Salle de fête</li>
											<li>Conférence</li>
											<li>Réunion</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="news_post_image"><img src="<?php echo image_url('salle/salle décorée.jpg'); ?>" alt=""></div>
							<div class="news_post_text">
								<p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam.</p>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
								<div><div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
									<div class="news_post_day">2</div>
									<div class="news_post_month">Apr '18</div>
								</div></div>
                                <div class="news_post_title_content">
                                    <div class="news_post_title"><a href="#">Salle de fête</a></div>
                                    <div class="news_post_info">
                                        <ul>
                                            <li>Salle de fête</li>
                                            <li>Conférence</li>
                                            <li>Réunion</li>
                                        </ul>
                                    </div>
                                </div>
							</div>
							<div class="news_post_image"><img src="<?php echo image_url('salle/Salle-fetes-ceremonies.jpg'); ?>" alt=""></div>
							<div class="news_post_text">
								<p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam.</p>
							</div>
						</div>

					</div>

					<!-- Pagination -->
					<div class="pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-6">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_top_search">
							<form action="#" class="sidebar_top_search_form">
								<input type="text" class="sidebar_top_search_input" placeholder="Rechercher votre salle..." required="required">
								<button class="sidebar_top_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>

						<!-- Sidebar Search -->
						<div class="sidebar_search">
							<div class="sidebar_search_title">Faites votre reservation/location ici !</div>
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

									<button class="sidebar_search_button_2 search_form_button_2">Enregistrer</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script>
        window.onload = function (){
            $('#salle').addClass('active');
        };
    </script>