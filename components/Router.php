<?php

class Router
{
    private $route;

    public function __construct()
    {
        $routPath = ROOT . '/config/route.php';
        $this->route = include_once($routPath);
    }

    public function getURL()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function runApp()
    {
        $url = $this->getURL();

        foreach ($this->route as $urlPattern => $path) {

            if (preg_match("~$urlPattern~", $url)) { // ищем в адресной строке ($url) совпадения из массива  $urlPattern

                $internalRoute = preg_replace("~$urlPattern~", $path, $url);

                $segment = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segment) . "Controller");

                $actionName = "action" . ucfirst(array_shift($segment));

                $param = $segment;

                $controllerFile = ROOT . '/controller/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {

                    include_once ($controllerFile);

                }

                $object = new $controllerName;

                $result = call_user_func_array(array($object, $actionName), $param);

                if ($result != null) {

                    break;

                }
            }
        }
    }
}
