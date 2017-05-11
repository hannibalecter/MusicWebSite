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
        <li><a class="active" href="../index.php"><i aria-hidden="true" class="glyphicon glyphicon-home"></i><span>Home</span></a></li>
        <li><a href="../about.php"><i class="glyphicon glyphicon-user"></i><span>About</span></a></li>
        <li><a href="blog.html"><i class="glyphicon glyphicon-list-alt"></i><span>Blog</span></a></li>
        <li><a href="codes.html"><i class="glyphicon glyphicon-picture"></i><span>Short Codes</span></a></li>
        <li><a href="contact.html"><i class="glyphicon glyphicon-envelope"></i><span>Contact</span></a></li>
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
