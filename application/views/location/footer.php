

<!-- Newsletter -->

<div class="newsletter">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo image_url('newsletter.jpg'); ?>" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="newsletter_title_container">
                        <div class="newsletter_title">Informations ou notifications !</div>
                        <div class="newsletter_subtitle">Inscrivez-vous à notre newsletter</div>
                    </div>
                    <div class="newsletter_form_container">
                        <form action="#" class="newsletter_form">
                            <input type="email" class="newsletter_input" placeholder="Votre adresse email" required="required">
                            <button class="newsletter_button">Souscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="footer_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer_logo"><a href="#"><img src="<?php echo image_url('logoc.png'); ?>" style="width: 120px;" alt=""></a></div>
                </div>
                <div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
                    <div class="footer_title">Latest Properties</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 footer_col">
                    <div class="footer_about">
                        <div class="footer_about_text">Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curab itur ornare nisl at sagittis cursus.</div>
                    </div>
                </div>
                <div class="col-lg-3 footer_col">
                    <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                        <div><div class="footer_latest_image"><img src="<?php echo image_url('footer_latest_1.jpg'); ?>" alt=""></div></div>
                        <div class="footer_latest_content">
                            <div class="footer_latest_location">Miami</div>
                            <div class="footer_latest_name"><a href="#">Sea view property</a></div>
                            <div class="footer_latest_price">$ 1. 234 981</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer_col">
                    <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                        <div><div class="footer_latest_image"><img src="<?php echo image_url('footer_latest_2.jpg'); ?>" alt=""></div></div>
                        <div class="footer_latest_content">
                            <div class="footer_latest_location">Miami</div>
                            <div class="footer_latest_name"><a href="#">Town House</a></div>
                            <div class="footer_latest_price">$ 1. 234 981</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer_col">
                    <div class="footer_latest d-flex flex-row align-items-start justify-content-start">
                        <div><div class="footer_latest_image"><img src="<?php echo image_url('footer_latest_3.jpg'); ?>" alt=""></div></div>
                        <div class="footer_latest_content">
                            <div class="footer_latest_location">Miami</div>
                            <div class="footer_latest_name"><a href="#">Modern House</a></div>
                            <div class="footer_latest_price">$ 1. 234 981</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés | Conçu par <a href="#" target="_blank">Kenawek</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="footer_phone ml-auto"><span>Tél : </span>698 813 857</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php

echo js("jquery-3.2.1.min");
echo js("bootstrap4/popper");
echo js("bootstrap4/bootstrap.min");
echo js("OwlCarousel2-2.2.1/owl.carousel");
echo js("easing/easing");
echo js("parallax-js-master/parallax.min");
echo js("custom");
echo js("greensock/TweenMax.min");
echo js("greensock/TimelineMax.min");
echo js("scrollmagic/ScrollMagic.min");
echo js("greensock/animation.gsap.min");
echo js("greensock/ScrollToPlugin.min");
echo js("rangeslider.js-2.3.0/rangeslider.min");
echo js("parallax-js-master/parallax.min");
echo js("property");
echo js("about");

?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

</body>
</html>