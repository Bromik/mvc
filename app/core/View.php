<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.06.2017
 * Time: 18:13
 */
class View

{
    public function generationView($content_view, $template_view, $data=array()){

        include ROOT.'/app/view/template/'.$template_view;

    }

}