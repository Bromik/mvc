<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.06.2017
 * Time: 16:55
 */
class MainController extends Controller
{

    public function actionContent()
    {
        $this->view->generationView('index/index.php', 'template.php');
    }

    public function actionIndex()
    {
        require_once ROOT . '/view/index/index.php';
    }

}