<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 17.05.2017
 * Time: 17:46
 */
require_once(__DIR__ . "/../../LogicLayer/GalleryManagement.php");


$objArr = GalleryManagement::getAllGallery();

echo "<table class=\"table\">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Resim
        </th>
        <th>
            Tarih
        </th><th></th><th></th>

    </tr>
    </thead>
    <tbody>";

    foreach($objArr as $obj){
        echo "<tr>
        <td>
            $obj->id
        </td>
        <td>
            $obj->image_gallery
        </td>
        <td>
            $obj->date_gallery
        </td>
         <td><a href='/admin/edit.php?entity=2&id=" . $obj->id . "'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
         <td><a href='/admin/edit.php?delete=2&id=" . $obj->id . "'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>
              
        
    </tr>";}

echo "</tbody></table>";
?>
