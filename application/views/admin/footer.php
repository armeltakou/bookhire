<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

    <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
            <img src="<?php echo img_url('browsers/chrome.png'); ?>" alt="">
        </a>

        <a href="https://www.mozilla.org/en-US/firefox/new">
            <img src="<?php echo img_url('browsers/firefox.png'); ?>" alt="">
        </a>

        <a href="http://www.opera.com">
            <img src="<?php echo img_url('browsers/opera.png'); ?>" alt="">
        </a>

        <a href="https://support.apple.com/downloads/safari">
            <img src="<?php echo img_url('browsers/safari.png'); ?>" alt="">
        </a>

        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="<?php echo img_url('browsers/edge.png'); ?>" alt="">
        </a>

        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="<?php echo img_url('browsers/ie.png'); ?>" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript -->
<!-- Vendors -->
<?php

echo vendorsjs("bower_components/jquery/dist/jquery.min");
echo vendorsjs("bower_components/popper.js/dist/umd/popper.min");
echo vendorsjs("bower_components/bootstrap/dist/js/bootstrap.min");
echo vendorsjs("bower_components/jquery.scrollbar/jquery.scrollbar.min");
echo vendorsjs("bower_components/jquery-scrollLock/jquery-scrollLock.min");
echo vendorsjs("bower_components/salvattore/dist/salvattore.min");
echo vendorsjs("bower_components/flot/jquery.flot");
echo vendorsjs("bower_components/flot/jquery.flot.resize");
echo vendorsjs("bower_components/flot.curvedlines/curvedLines");
echo vendorsjs("bower_components/jqvmap/dist/jquery.vmap.min");
echo vendorsjs("bower_components/jqvmap/dist/maps/jquery.vmap.world");
echo vendorsjs("bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min");
echo vendorsjs("bower_components/peity/jquery.peity.min");
echo vendorsjs("bower_components/moment/min/moment.min");
echo vendorsjs("bower_components/fullcalendar/dist/fullcalendar.min");

echo demojs("flot-charts/curved-line");
echo demojs("flot-charts/line");
echo demojs("flot-charts/dynamic");
echo demojs("flot-charts/chart-tooltips");
echo demojs("other-charts");
echo demojs("jqvmap");

echo js("app.min");

?>
</body>
</html>