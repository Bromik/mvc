<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.06.2017
 * Time: 18:21
 */
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function actionContent()
    {
    }
}