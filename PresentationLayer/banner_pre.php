<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 12.05.2017
 * Time: 01:10
 */
?>

<div class="agileinfo-main">
    <div class="slider">
        <script src="resources/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                });
            });
        </script>
        <ul class="rslides" id="slider1">
            <li>
                <div class="banner">
                    <h3>Duis euismod massa ut sem fringilla blandit. Proin vel enim nec ipsum finibus. </h3>
                </div>
            </li>
            <li>
                <div class="banner banner2">
                    <h3>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit. </h3>
                </div>
            </li>
            <li>
                <div class="banner banner3">
                    <h3>Sem fringilla blandit duis euismod massa ut . Proin vel enim nec ipsum finibus. </h3>
                </div>
            </li>
        </ul>
    </div>
    <div class="agileinfo-header">
        <div class="container">
            <div class="agile-logo">
                <h1><a href="UI.php"><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Rock</a></h1>
            </div>
            <div class="agileits-w3layouts-icons">
                <div class="social-icon">
                    <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
