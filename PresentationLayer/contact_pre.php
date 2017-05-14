<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(__DIR__ . "/head_pre.php"); ?>

</head>
<body>
<!-- banner start here -->
<div class="agileinfo-main about-top">
    <div class="banner">
    </div>
    <div class="agileinfo-header">
        <div class="container">
            <div class="agile-logo">
                <h1><a href="index.html"><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Rock</a></h1>
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
    <!-- navigation start here -->
    <?php include(__DIR__."/navbar_pre.php"); ?>

</div>
<!-- //navigation end here -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <h2 class="agile-title">Contact Us</h2>
        <div class="col-md-7 contact-right">
            <form action="#" method="post">
                <input type="text" name="Name" placeholder="Name" required="">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="text" name="Telephone" placeholder="Telephone" required="">
                <textarea name="Message" placeholder="Message..." required=""></textarea>
                <input type="submit" value="Submit" >
            </form>
        </div>
        <div class="col-md-5 contact-left">
            <p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
            <ul>
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    756 globel Place, Australia.
                </li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    +123 2222 222
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:example@mail.com">mail@example.com</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="map">
            <h3 class="agile-title">How to Find Us</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- //contact -->
<!-- footer start here -->
<div class="agilebg-footer">
    <div class="footer">
        <div class="container">
            <div class="footer-agileinfo">
                <div class="col-md-3 col-sm-3 footer-wthree-grid">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="codes.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 footer-wthree-grid">
                    <h3>Latest Tweet</h3>
                    <div class="agileits-w3layouts-tweets">
                        <h5><i class="fa fa-twitter" aria-hidden="true"></i> Lorem ipsum</h5>
                    </div>
                    <p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p>
                </div>
                <div class="col-md-4 col-sm-4 footer-wthree-grid">
                    <h3>Keep In Touch</h3>
                    <div class="ftr-icons">
                        <div class="ftr-iblock">
                            <span class="glyphicon glyphicon-map-marker">  </span>
                        </div>
                        <div class="ftr-text">
                            <p>Proin vel enim nec ipsum finibus. Duis euismod massa ut sem fringilla blandit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="ftr-icons">
                        <div class="ftr-iblock">
                            <span class="glyphicon glyphicon-earphone">  </span>
                        </div>
                        <div class="ftr-text">
                            <p>+333 222 23456</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="ftr-icons">
                        <div class="ftr-iblock">
                            <span class="glyphicon glyphicon-envelope">  </span>
                        </div>
                        <div class="ftr-text">
                            <p><a href="mailto:info@example.com">mail@example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //footer end here -->
<!-- copy rights start here -->
<div class="copy-right">
    <div class="container">
        <p>© 2017 Rock. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!-- //copy right end here -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="resources/js/bootstrap.js"></script>
</body>
</html>