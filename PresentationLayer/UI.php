<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(__DIR__."/head_pre.php");?>
    <!-- //end-smooth-scrolling -->
</head>
<body>
<!-- banner start here -->
<div class="agileinfo-main">
    <div class="slider">
        <script src="/resources/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 1000,
                    namespace: "callbacks",
                });
            });
        </script>
        <ul class="rslides" id="slider1">
            <li>
                <div class="banner">
                    <h3>Müzik olmasaydı, hayat bir hatadan ibaret olurdu. <br/>-Nietzsche- </h3>
                </div>
            </li>
            <li>
                <div class="banner banner2">
                    <h3>Sanatsız kalan bir milletin, hayat damarlarından biri kopmuş demektir.<br/>-Mustafa Kemal ATATÜRK- </h3>
                </div>
            </li>
            <li>
                <div class="banner banner3">
                    <h3>Hayat, ıstırap ve keder verirse sükuneti müzikte arayınız. <br/>-Konfüçyüs- </h3>
                </div>
            </li>
        </ul>
    </div>
    <div class="agileinfo-header">
        <div class="container">
            <div class="agile-logo">
                <h1><a href="../index.php"><i class="fa fa-music bounce bounceIn animated" aria-hidden="true"></i> Emre Sözen</a></h1>
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
<!-- navigation end here -->
<!-- banner end here -->
<div class="banner-w3bottom">
    <div class="container">
        <div class="banner-w3bottom-row">
            <div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
                <div class="col-md-4 w3ls-bnrgrids-left">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 w3ls-bnrgrids-right">
                    <h4>1. Kişiye Özel Kurs </h4>
                    <p>Yönelmek istediği alan veya yeteneğine göre kişiye özel program ve teknik.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
                <div class="col-md-4 w3ls-bnrgrids-left">
                    <i class="fa fa-film" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 w3ls-bnrgrids-right">
                    <h4>2. Hızlı Öğrenme</h4>
                    <p>Kullanılan müzik aletine özel dökümantasyon ve düzenli kurs ile farkı siz de göreceksiniz.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 w3ls-bnrgrids">
                <div class="col-md-4 w3ls-bnrgrids-left">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 w3ls-bnrgrids-right">
                    <h4>3. Başarı</h4>
                    <p>Gerekli seviyeye gelindiğinde olabilecek etkinliklerde sahne alma şansı veya hazırlanılan okulu kazanma.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //banner end here -->
<!-- welcome -->
<div class="welcome agileits">
    <div class="container">
        <h2 class="agile-title">WebSiteme Hoşgeldiniz</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor dolor, id egestas felis tristique vel. Donec malesuada, lorem sed vulputate tincidunt, nulla quam pulvinar mi, blandit placerat odio neque quis risus. Nullam ultricies erat non lectus aliquam, eu finibus neque semper. Morbi viverra, neque sit amet pretium blandit, dui mauris lacinia metus, a rhoncus erat ipsum vitae augue. Morbi laoreetvenenatis nulla, et venenatis purus scelerisque id. Vestibulum non facilisis lectus, quis accumsan mi.</p>
        <div class="welcome-agileinfo">
            <div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
                <div class="view view-w3-agile">
                    <img src="/resources/images/img1.jpg" alt="" class="img-responsive" />
                    <div class="agileits-w3layouts-mask">
                        <h4>Kişiye Özel Kursu Kaçırma</h4>
                        <p><a href="../contact.php" style="color:#FFFFFF;" >Mesaj Atmak İçin Tıkla</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
                <div class="view view-w3-agile">
                    <img src="/resources/images/img2.jpg" alt="" class="img-responsive" />
                    <div class="agileits-w3layouts-mask">
                        <h4>Sahne Alma Şansını Kaçırma</h4>
                        <p><a href="../contact.php" style="color:#FFFFFF;">Mesaj Atmak İçin Tıkla</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- events -->
<div class="events">
    <div class="container">
        <h3 class="agile-title">Etkinlikler</h3>
        <div class="events-info">
            <?php

            foreach ($objArr as $obj) {
                $arr = ActivityManagement::editDate($obj->date_activity);
                ?>
            <div class="col-md-6 event-grids">
                <div class="w3layouts-text">
                    <h4><?php echo $arr[2]?><span><?php echo $arr[1]?></span></h4>
                    <h6><a href="../single.php">&emsp;<?php echo $obj->title_activity?> / <?php echo $obj->address_activity?></a></h6>
                    <div class="clearfix"> </div>
                </div>
                <p><?php echo $obj->content_activity?></p>
            </div>

                <?php
            }
            ?>

            <div class="clearfix"> </div>

        </div>
    </div>
</div>
<!-- //events -->
<!--- albums -->
<div class="albums">
    <div class="container">
        <h3 class="agile-title">Çalışmalar</h3>
        <div class="col-md-6 w3lsalbums-grid">
            <div class="albums-left">
                <div class="wthree-almub">
                </div>
            </div>
            <div class="albums-right">
                <h4>Dolor Sit</h4>
                <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                <a class="w3more" href="../single.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-6 w3lsalbums-grid">
            <div class="albums-left">
                <div class="wthree-almub wthree-almub2">
                </div>
            </div>
            <div class="albums-right">
                <h4>Consequat</h4>
                <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                <a class="w3more" href="../single.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-6 w3lsalbums-grid">
            <div class="albums1-right">
                <div class="wthree-almub wthree-almub3">
                </div>
            </div>
            <div class="albums1-left">
                <h4>Dolores Btrs</h4>
                <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                <a class="w3more" href="../single.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-6 w3lsalbums-grid">
            <div class="albums1-right">
                <div class="wthree-almub wthree-almub4">
                </div>
            </div>
            <div class="albums1-left">
                <h4>Nam aliquam</h4>
                <p>Nsatolernatur auts oditaut miertase vertas.Measnseqe ustur magni dolores eoqus ratione voluptate.</p>
                <a class="w3more" href="../single.php"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- //albums -->
<!-- footer start here -->
    <?php include(__DIR__. "/footer_pre.php"); ?>
</html>