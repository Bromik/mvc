<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.06.2017
 * Time: 16:55
 */
class MainController extends Controller
{
    public function actionIndex()
    {
        $this->view->generationView('index.php', 'template.php');
    }
}