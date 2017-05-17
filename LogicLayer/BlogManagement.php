<?php

/**
 * Created by PhpStorm.
 * User: erens
 * Date: 16.05.2017
 * Time: 19:23
 */
class BlogManagement
{
    public static function getAllBlog()
    {
        $db = new DB();
        $result = $db->getDataTable("SELECT * FROM blog");

        $allBlog = array();

        while ($row = $result->fetch_assoc()) {
            $activityObj = new Blog($row["id"], $row["title_blog"], $row["image_blog"], $row["date_blog"], $row["content_blog"], $row["isBlog"]);
            array_push($allBlog, $activityObj);
        }

        return $allBlog;
    }

    public static function getBlogByID($id)
    {
        $db = new DB();
        $result = $db->getDataTable("select * from blog where id = '$id'");

        $newBlog = null;

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $newBlog = new Blog($row["id"], $row["title_blog"], $row["image_blog"], $row["date_blog"], $row["content_blog"], $row["isBlog"]);

        }

        return $newBlog;
    }

    public static function updateBlog(Blog $updateObj)
    {
        $db = new DB();
        $db->executeQuery("UPDATE blog SET title_blog='$updateObj->title_blog',image_blog='$updateObj->image_blog', date_blog='$updateObj->date_blog',
                                        content_blog='$updateObj->content_blog', isBlog='$updateObj->isBlog'WHERE id='$updateObj->id'");

    }

    public static function insertBlog(Blog $newObj)
    {
        $db = new DB();
        $success = $db->insertQuery("INSERT INTO Blog(title_blog, image_blog, date_blog, content_blog, isBlog) 
                                      VALUES ('$newObj->title_blog', '$newObj->image_blog', '$newObj->date_blog', '$newObj->content_blog', , '$newObj->isBlog')");

        return $success;
    }


    public static function deleteBlog($id)
    {
        $db = new DB();
        $db->executeQuery("DELETE FROM blog WHERE id='$id'");

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