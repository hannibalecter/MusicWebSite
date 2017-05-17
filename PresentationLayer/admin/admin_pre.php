<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(__DIR__ . "/../head_pre.php"); ?>

</head>
<body>
<!-- banner start here -->
<div class="agileinfo-main about-top">
    <?php include(__DIR__."/../banner_pre.php"); ?>

    <!-- navigation start here -->
    <div class="top-nav">
        <ul class="w3l">
            <li><?php if ($select == 1) { ?><i class="glyphicon glyphicon-user"></i><?php } ?><a href="/admin/blog_admin.php" class="icon-air"><span>Blog Düzenle</span></a></li>
            <li><?php if ($select == 2) { ?><i class="glyphicon glyphicon-user"></i><?php } ?><a href="/admin/gallery_admin.php" class="icon-air"><span>Galeri Düzenle</span></a></li>
            <li><?php if ($select == 3) { ?><i class="glyphicon glyphicon-user"></i><?php } ?><a href="/admin/activity_admin.php" class="icon-air"><span>Etkinlik Düzenle</span></a></li>

        </ul>
        <!-- script-for-menu -->
        <script>
            $( "span.menu" ).click(function() {
                $( "ul.w3l" ).slideToggle( 300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- //script-for-menu -->
    </div>
</div>
<!-- //navigation end here -->
<!--- albums -->
<div class="albums agile-blog">
    <div class="container">
        <h2 class="agile-title">Admin Sayfası</h2>
            <?php
                switch($select){
                    case 1:
                        include(__DIR__. "/blog_admin_pre.php");
                        break;
                    case 2:
                        include(__DIR__. "/gallery_admin_pre.php");
                        break;
                    case 3:
                        include(__DIR__. "/activity_admin_pre.php");
                        break;
                }

            ?>




    </div>
</div>
<!--- //albums -->
<!-- footer start here -->
<?php include(__DIR__. "/../footer_pre.php"); ?>

</body>
</html>