<?php

/**
 * Created by PhpStorm.
 * User: erens
 * Date: 16.05.2017
 * Time: 19:22
 */
class Blog
{
    public $id;
    public $date_blog;
    public $title_blog;
    public $image_blog;
    public $content_blog;
    public $isBlog; // Control of blog or works

    public function __construct($id, $title_blog, $image_blog, $date_blog, $content_blog, $isBlog) {
        $this->id = $id;
        $this->title_blog = $title_blog;
        $this->image_blog = $image_blog;
        $this->date_blog = $date_blog;
        $this->content_blog = $content_blog;
        $this->isBlog = $isBlog;

    }
}