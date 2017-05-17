<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 17.05.2017
 * Time: 17:46
 */

require_once(__DIR__ . "/../../LogicLayer/ActivityManagement.php");
$objArr = ActivityManagement::getAllActivity();

echo "<table class=\"table\">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Tarih
        </th>
        <th>
            Başlık
        </th>
        <th>
            Adres
        </th>
        <th>
            İçerik
        </th>
        <th>
            Görünür mü?
        </th><th></th><th></th>
    </tr>
    </thead>
    <tbody>";

    foreach($objArr as $obj){
        echo "<tr>
        <td>
            $obj->id&emsp;&emsp;
        </td>
        <td>
            $obj->date_activity &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;       
        </td>
        <td>
            $obj->title_activity&emsp;&emsp;&emsp;&emsp;&emsp;
        </td>
        <td>
            $obj->address_activity&emsp;&emsp;
        </td>
        <td>
            $obj->content_activity
        </td>
        <td>
            $obj->isShow
        </td>
         <td><a href='/admin/edit.php?entity=3&id=" . $obj->id . "'><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
         <td><a href='/admin/edit.php?delete=3&id=" . $obj->id . "'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>
                                               
    </tr>";

    }
echo "</tbody>
</table>"
?>


