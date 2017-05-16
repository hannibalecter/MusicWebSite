<?php

/**
 * Created by PhpStorm.
 * User: erens
 * Date: 16.05.2017
 * Time: 16:21
 */
class Activity
{
    public $id;
    public $date_activity;
    public $title_activity;
    public $address_activity;
    public $content_activity;
    public $isShow;

    public function __construct($id, $date_activity, $title_activity, $address_activity, $content_activity, $isShow) {
        $this->id = $id;
        $this->date_activity = $date_activity;
        $this->title_activity = $title_activity;
        $this->address_activity = $address_activity;
        $this->content_activity = $content_activity;
        $this->isShow = $isShow;

    }


}