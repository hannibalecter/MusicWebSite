<?php
require_once(__DIR__ . "/../DataLayer/DB.php");
require_once("Activity.php");

class ActivityManagement
{

    public static function getAllActivity()
    {
        $db = new DB();
        $result = $db->getDataTable("SELECT * FROM activity");

        $allActivity = array();

        while ($row = $result->fetch_assoc()) {
            $activityObj = new Activity($row["id"], $row["date_activity"], $row["title_activity"], $row["address_activity"], $row["content_activity"], $row["isShow"]);
            array_push($allActivity, $activityObj);
        }

        return $allActivity;
    }

    public static function getActivityByID($id)
    {
        $db = new DB();
        $result = $db->getDataTable("select * from activity where id = '$id'");

        $newActivity = null;

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $newActivity = new Activity($row["id"], $row["date_activity"], $row["title_activity"], $row["address_activity"], $row["content_activity"], $row["isShow"]);

        }

        return $newActivity;
    }

    public static function updateActivity(Activity $updateObj)
    {
        $db = new DB();
        $db->executeQuery("UPDATE activity SET date_activity='$updateObj->date_activity',title_activity='$updateObj->title_activity', address_activity='$updateObj->address_activity',
                                        content_activity='$updateObj->content_activity', isShow='$updateObj->isShow'WHERE id='$updateObj->id'");

    }

    public static function insertActivity(Activity $newObj)
    {
        $db = new DB();
        $success = $db->insertQuery("INSERT INTO Activity(date_activity, title_activity, address_activity, content_activity, isShow) 
                                      VALUES ('$newObj->date_activity', '$newObj->title_activity', '$newObj->address_activity', '$newObj->content_activity', , '$newObj->isShow')");

        return $success;
    }


    public static function deleteActivity($id)
    {
        $db = new DB();
        $db->executeQuery("DELETE FROM activity WHERE id='$id'");

    }

    public static function editDate($date_activity){
        $newdate = explode('-', $date_activity);
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