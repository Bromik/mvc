<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
function __autoload($className)
{
    include_once ROOT . '/app/core/' . $className . '.php';
}
include ROOT."/app/controller/Controller.php";
function wtf($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

$r = new Router();
$r->runApp();