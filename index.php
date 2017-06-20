<?php
ini_set('display_errors', 1);
error_reporting(0);
define('ROOT', dirname(__FILE__));
function __autoload($className)
{
    include_once ROOT . '/core/' . $className . '.php';
}

function wtf($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

$r = new Router();
$r->runApp();