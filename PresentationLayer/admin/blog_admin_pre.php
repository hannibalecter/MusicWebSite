<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 17.05.2017
 * Time: 17:45
 */
require_once(__DIR__ . "/../../LogicLayer/BlogManagement.php");


$objArr = BlogManagement::getAllBlog();

echo "<table class=\"table\">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Başlık
        </th>
        <th>
            Resim
        </th>
        <th>
            Tarih
        </th>
        <th>
            İçerik
        </th>
        <th>
            Blog mu? Çalışma mı?
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
            $obj->title_blog
        </td>
        <td>
            $obj->image_blog
        </td>
        <td>
            $obj->date_blog
        </td>
        <td>
            $obj->content_blog
        </td>
        <td>
            $obj->isBlog
        </td>
         <td><a href='/admin/edit.php?entity=1&id=" . $obj->id . "'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
         <td><a href='/admin/edit.php?delete=1&id=" . $obj->id . "'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>
              
    </tr>";

}

echo "</tbody></table>"
?>