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
    <?php include(__DIR__."/banner_pre.php"); ?>

    <!-- navigation start here -->
    <?php include(__DIR__."/navbar_pre.php"); ?>

</div>
<!-- //navigation end here -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <h2 class="agile-title">Contact Us</h2>
        <div class="col-md-7 contact-right">

            <form action="#" method="POST">
                <input id="name" type="text" name="name" placeholder="Name" required="">
                <input id="email" type="email" name="email" placeholder="Email" required="">
                <input id="phone" type="text" name="phone" placeholder="Telephone" required="">
                <textarea id="message" name="message" placeholder="Message..." required=""></textarea>
                <input id="submit" name="submit" type="submit" value="Submit">
                <?php echo $result;?>
            </form>
        </div>
        <div class="col-md-5 contact-left">
            <p>"Özel gün ve mekanlarınızda canlı müzik"</p>
            <p>"Piyano - Gitar - Basgitar - Elektrogitar - Kontrbas - Klavye ve Org Dersleri"</p>
            <p>"Üniversite ve Liselerin müzik bölümlerine öğrenci hazırlama"</p>
            <ul>
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    Cumhuriyet Mahallesi Güvenevler Sitesi No.1 Daire.1 MUĞLA/MİLAS
                </li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    +90 505 208 4835
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:emresozen91@hotmail.com">emresozen91@hotmail.com</a>
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
<?php include(__DIR__. "/footer_pre.php"); ?>

</body>
</html>