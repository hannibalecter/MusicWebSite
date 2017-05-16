<?php

/**
 * Created by PhpStorm.
 * User: erens
 * Date: 16.05.2017
 * Time: 19:23
 */
class Gallery
{
    public $id;
    public $date_gallery;
    public $image_gallery;

    public function __construct($id, $image_gallery, $date_gallery) {
        $this->id = $id;
        $this->image_gallery = $image_gallery;
        $this->date_gallery = $date_gallery;


    }
}