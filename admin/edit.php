<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 17.05.2017
 * Time: 17:29
 */

$activePage = "admin";
$title = "Edit";
$entity = 0; // For update elements of database
$select = 0; // For select view php screen
$delete = 0; // For delete elements of database
$obj = null;



// This block for update elements of table in mysql
if (isset($_GET["entity"]) && isset($_GET["id"])) {
    $entity = $_GET["entity"];
    $select = $_GET["entity"];
    require_once(__DIR__ . "/../LogicLayer/BlogManagement.php");
    require_once(__DIR__ . "/../LogicLayer/GalleryManagement.php");
    require_once(__DIR__ . "/../LogicLayer/ActivityManagement.php");

    // Select which table control
    switch ($entity) {
        case 1:
            // new object with cargo class
            $obj = BlogManagement::getBlogByID($_GET["id"]);
            updateBlog($_GET["id"]);
            break;
        case 2:
            // new object with transfer class
            $obj = GalleryManagement::getGalleryByID($_GET["id"]);
            updateGallery($_GET["id"]);
            break;
        case 3:
            // new object with personnel class
            $obj = ActivityManagement::getActivityByID($_GET["id"]);
            updateActivity($_GET["id"]);
            break;

    }

}
// This block for delete elements of table in mysql
if (isset($_GET["delete"]) && isset($_GET["id"])) {
    $delete = $_GET["delete"];
    $select = $_GET["delete"];
    require_once(__DIR__ . "/../LogicLayer/BlogManagement.php");
    require_once(__DIR__ . "/../LogicLayer/GalleryManagement.php");
    require_once(__DIR__ . "/../LogicLayer/ActivityManagement.php");
    // Selected delete elements of table with its id
    switch ($delete) {
        case 1:
            BlogManagement::deleteBlog($_GET["id"]);
            break;
        case 2:
            GalleryManagement::deleteGallery($_GET["id"]);
            break;
        case 3:
            ActivityManagement::deleteActivity($_GET["id"]);
            break;

    }

}
// Return parameter of object with class type obj and parameter
function getValue($obj, $parameter, $type)
{
    if (isset($obj) && $obj instanceof $type) {
        return $obj->{$parameter};
    }
}

function updateBlog($id)
{
    if (isset($_POST['title_blog']) && isset($_POST['image_blog']) && isset($_POST['date_blog'])&& isset($_POST['content_blog'])&& isset($_POST['isBlog'])) {

        $updateObj = new Blog($id, $_POST["title_blog"], upload() ,date('Y-m-d', strtotime($_POST["date_blog"])), $_POST['content_blog'], $_POST['isBlog']);
        BlogManagement::updateBlog($updateObj);

    }
}
function updateActivity($id)
{
    if (isset($_POST['date_activity']) && isset($_POST['title_activity']) && isset($_POST['address_activity']) && isset($_POST['content_activity']) && isset($_POST['isShow']))
    {

        $updateObj = new Activity($id, date('Y-m-d', strtotime($_POST["date_activity"])), $_POST["title_activity"], $_POST["address_activity"], $_POST["content_activity"], $_POST["isShow"]);
        ActivityManagement::updateActivity($updateObj);

    }
}
//TODO: birthDate type Date Error (DBNULL benzeri)
function updateGallery($id)
{
    if (isset($_POST['image_gallery']) && isset($_POST['date_gallery'])) {

        $updateObj = new Gallery($id, $_POST['image_gallery'], date('Y-m-d', strtotime($_POST['date_gallery'])));
        GalleryManagement::updateGallery($updateObj);

    }
}
function upload() {
    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['image_blog']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['image_blog']['tmp_name'])) {

            //checks size of uploaded image on server side
            if( $_FILES['image_blog']['size'] < $maxsize) {

                //checks whether uploaded file is of image type
                //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['image_blog']['tmp_name']),"image")===0) {

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['image_blog']['tmp_name']));
                    return $imgData;
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
            else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['image_blog']['name'].' is '.$_FILES['image_blog']['size'].
                    ' bytes</div><hr />';
            }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['image_blog']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}


require_once("../PresentationLayer/admin/edit_pre.php");
?>
