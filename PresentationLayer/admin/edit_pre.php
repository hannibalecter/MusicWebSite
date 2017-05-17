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
        if ($entity == 1) { ?>
            <legend><h3>Update Blog</h3></legend>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <fieldset>

                    <!-- Form Name -->

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="title_blog"><strong>Başlık</strong></label>
                        <div class="col-md-4">
                            <input id="title_blog" name="title_blog" type="text" placeholder=""
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "title_blog", Blog::class); ?>">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="image_blog"><strong>Resim</strong></label>
                        <div class="col-md-4">
                            <input type="text" id="image_blog" name="image_blog"/>

                            <input type="file" id="image_blog" name="image_blog"/>

                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->

                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="date_blog"><strong>Tarih</strong></label>
                        <div class="col-md-4">
                            <input id="date_blog" name="date_blog" type="date" placeholder=""
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "date_blog", Blog::class); ?>">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="content_blog"><strong>Açıklama</strong></label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="content_blog" name="content_blog"
                                      placeholder=""><?php echo getValue($obj, "content_blog", Blog::class);?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"
                               for="isBlog"><strong>Blog & Çalışma</strong></label>
                        <div class="col-md-4">
                            <label class="isBlog-inline" for="isBlog-1">
                                <input type="radio" name="isBlog" id="isBlog-1" value="1"
                                    <?php if (getValue($obj, "isBlog", Blog::class) == 1) {
                                        echo "checked=\"checked\"";
                                    } ?> >
                                Yes
                            </label>
                            <label class="isBlog-inline" for="isBlog-0">
                                <input type="radio" name="isBlog" id="isBlog-0"
                                       value="0" <?php if (getValue($obj, "isBlog", Blog::class) == 0) {
                                    echo "checked=\"checked\"";
                                } ?>>
                                No
                            </label>
                        </div>
                    </div>



                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">
                                <strong>Submit</strong></button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <?php



        } else if ($entity == 2) { ?>
            <legend><h3>Update Gallery</h3></legend>
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cargoID">CargoID</label>
                        <div class="col-md-4">
                            <input id="cargoID" name="cargoID" type="text" placeholder="1"
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "cargoID", Transfer::class); ?>">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sourceAddressID">Source
                            Address ID</label>
                        <div class="col-md-4">
                            <input id="sourceAddressID" name="sourceAddressID" type="text"
                                   placeholder="2" class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "sourceAddressID", Transfer::class); ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="destinationAddressID">Destination
                            Address ID</label>
                        <div class="col-md-4">
                            <input id="destinationAddressID" name="destinationAddressID"
                                   type="text" placeholder="2" class="form-control input-md"
                                   required=""
                                   value="<?php echo getValue($obj, "destinationAddressID", Transfer::class); ?>">

                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="deliveryControl">Delivery
                            Control</label>
                        <div class="col-md-4">
                            <label class="radio-inline" for="deliveryControl-0">
                                <input type="radio" name="deliveryControl"
                                       id="deliveryControl-0"
                                       value="0" <?php if (getValue($obj, "deliveryControl", Transfer::class) == 0) {
                                    echo "checked=\"checked\"";
                                } ?>">
                                Yes
                            </label>
                            <label class="radio-inline" for="deliveryControl-1">
                                <input type="radio" name="deliveryControl"
                                       id="deliveryControl-1"
                                       value="1" <?php if (getValue($obj, "deliveryControl", Transfer::class) == 1) {
                                    echo "checked=\"checked\"";
                                } ?>">
                                No
                            </label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tdate">Date</label>
                        <div class="col-md-4">
                            <input id="tdate" name="tdate" type="text" placeholder=""
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "tdate", Transfer::class); ?>">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tcomment">Comment</label>
                        <div class="col-md-4">
                                                    <textarea class="form-control" id="tcomment"
                                                              name="tcomment"><?php echo getValue($obj, "tcomment", Transfer::class); ?></textarea>
                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">
                                <strong>Submit</strong></button>
                        </div>
                    </div>

                </fieldset>
            </form>

            <?php
        } else if ($entity == 3) { ?>
            <legend><h3>Update Personnel</h3></legend>
            <form class="form-horizontal" method="POST">
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Name</label>
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="name"
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "name", Personnel::class); ?>">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input id="password" name="password" type="password"
                                   placeholder="password" class="form-control input-md"
                                   required=""
                                   value="<?php echo getValue($obj, "password", Personnel::class); ?>">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="phone">Phone Number</label>
                        <div class="col-md-4">
                            <input id="phone" name="phone" type="text" placeholder="5553423523"
                                   class="form-control input-md" required=""
                                   value="<?php echo getValue($obj, "phone", Personnel::class); ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="birthdate">Birth Date</label>
                        <div class="col-md-4">
                            <input id="birthdate" name="birthdate" type="text"
                                   placeholder="04.04.1990" class="form-control input-md"
                                   required=""
                                   value="<?php echo getValue($obj, "birthDate", Personnel::class); ?>">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="isAdmin">isAdmin</label>
                        <div class="col-md-4">
                            <input id="isAdmin" name="isAdmin" type="text"
                                   placeholder="04.04.1990" class="form-control input-md"
                                   required=""
                                   value="<?php echo getValue($obj, "isAdmin", Personnel::class); ?>">

                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">
                                <strong>Submit</strong></button>
                        </div>
                    </div>


                </fieldset>
            </form>

            <?php
        }



        if ($delete == 1) {
            require_once(__DIR__ . "/cargo.pre.php");

        } else if ($delete == 2) {
            require_once(__DIR__ . "/transfer.pre.php");

        } else if ($delete == 3) {

            require_once(__DIR__ . "/personnel.pre.php");

        } else if ($delete == 4) {
            require_once(__DIR__ . "/address.pre.php");

        }
        ?>




    </div>
</div>
<!--- //albums -->
<!-- footer start here -->
<?php include(__DIR__. "/../footer_pre.php"); ?>

</body>
</html>