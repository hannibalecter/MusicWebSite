<?php
require_once(__DIR__ . "/../DataLayer/DB.php");
require_once("Gallery.php");
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 16.05.2017
 * Time: 19:23
 */
class GalleryManagement
{
    public static function getAllGallery()
    {
        $db = new DB();
        $result = $db->getDataTable("SELECT * FROM gallery");

        $allGallery = array();

        while ($row = $result->fetch_assoc()) {
            $galleryObj = new Gallery($row["id"], $row["image_gallery"], $row["date_gallery"]);
            array_push($allGallery, $galleryObj);
        }

        return $allGallery;
    }

    public static function getGalleryByID($id)
    {
        $db = new DB();
        $result = $db->getDataTable("select * from gallery where id = '$id'");

        $newGallery = null;

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $newGallery = new Gallery($row["id"], $row["image_gallery"], $row["date_gallery"]);

        }

        return $newGallery;
    }

    public static function updateGallery(Gallery $updateObj)
    {
        $db = new DB();
        $db->executeQuery("UPDATE gallery SET image_gallery='$updateObj->image_gallery',date_gallery='$updateObj->date_gallery'");

    }

    public static function insertGallery(Gallery $newObj)
    {
        $db = new DB();
        $success = $db->insertQuery("INSERT INTO Gallery(image_gallery, date_gallery) 
                                      VALUES ('$newObj->image_gallery', '$newObj->date_gallery')");

        return $success;
    }


    public static function deleteGallery($id)
    {
        $db = new DB();
        $db->executeQuery("DELETE FROM gallery WHERE id='$id'");

    }

    public static function editDate($date_blog){
        $newdate = explode('-', $date_blog);
        switch($newdate[1]){

            case 1:
                $newdate[1] = "Ocak";
                break;
            case 2:
                $newdate[1] = "Şubat";
                break;
            case 3:
                $newdate[1] = "Mart";
                break;
            case 4:
                $newdate[1] = "Nisan";
                break;
            case 5:
                $newdate[1] = "Mayıs";
                break;
            case 6:
                $newdate[1] = "Haziran";
                break;
            case 7:
                $newdate[1] = "Temmuz";
                break;
            case 8:
                $newdate[1] = "Ağustos";
                break;
            case 9:
                $newdate[1] = "Eylül";
                break;
            case 10:
                $newdate[1] = "Ekim";
                break;
            case 11:
                $newdate[1] = "Kasım";
                break;
            case 12:
                $newdate[1] = "Aralık";
                break;}

        return $newdate;
    }
}