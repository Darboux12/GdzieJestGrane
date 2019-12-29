<?php

require_once "Controllers/MainPageController.php";
require_once "Controllers/SecurityController.php";
require_once "Controllers/NewsPageController.php";



class Routing {

    private $routes = [];

    public function __construct()
    {
        $this->routes = [

            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],

            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],

            'mainpage' => [
                'controller' => 'MainPageController',
                'action' => 'getLatestPhotos'
            ],

            'newspage' => [
                'controller' => 'NewsPageController',
                'action' => 'getNews'
            ]



        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}