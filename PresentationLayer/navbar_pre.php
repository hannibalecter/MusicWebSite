<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 12.05.2017
 * Time: 01:02
 */
?>
<div class="top-nav">
    <span class="menu">Menu</span>
    <ul class="w3l">
        <?php switch ($activePage){
            case "home":?>
                <li><a class="active" href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Anasayfa</span></a></li>
                <li><a href="../about.php"><i class="glyphicon glyphicon-user"></i><span>Hakkımda</span></a></li>
                <li><a href="../blog.php"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li><a href="../gallery.php"><i class="glyphicon glyphicon-picture"></i><span>Galeri</span></a></li>
                <li><a href="../contact.php"><i class="glyphicon glyphicon-envelope"></i><span>İletişim</span></a></li>
                <?php break;
            case "about": ?>
                <li><a href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Anasayfa</span></a></li>
                <li><a class="active" href="../about.php"><i class="glyphicon glyphicon-user"></i><span>Hakkımda</span></a></li>
                <li><a href="../blog.php"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li><a href="../gallery.php"><i class="glyphicon glyphicon-picture"></i><span>Galeri</span></a></li>
                <li><a href="../contact.php"><i class="glyphicon glyphicon-envelope"></i><span>İletişim</span></a></li>
                <?php break;
            case "blog": ?>
                <li><a href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Anasayfa</span></a></li>
                <li><a href="../about.php"><i class="glyphicon glyphicon-user"></i><span>Hakkımda</span></a></li>
                <li><a class="active" href="../blog.php"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li><a href="../gallery.php"><i class="glyphicon glyphicon-picture"></i><span>Galeri</span></a></li>
                <li><a href="../contact.php"><i class="glyphicon glyphicon-envelope"></i><span>İletişim</span></a></li>
                <?php break;
            case "gallery": ?>
                <li><a href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Anasayfa</span></a></li>
                <li><a href="../about.php"><i class="glyphicon glyphicon-user"></i><span>Hakkımda</span></a></li>
                <li><a href="../blog.php"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li><a class="active" href="../gallery.php"><i class="glyphicon glyphicon-picture"></i><span>Galeri</span></a></li>
                <li><a href="../contact.php"><i class="glyphicon glyphicon-envelope"></i><span>İletişim</span></a></li>
                <?php break;
            case "contact": ?>
                <li><a href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Anasayfa</span></a></li>
                <li><a href="../about.php"><i class="glyphicon glyphicon-user"></i><span>Hakkımda</span></a></li>
                <li><a href="../blog.php"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
                <li><a href="../gallery.php"><i class="glyphicon glyphicon-picture"></i><span>Galeri</span></a></li>
                <li><a class="active" href="../contact.php"><i class="glyphicon glyphicon-envelope"></i><span>İletişim</span></a></li>
                <?php break;
        } ?>

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
