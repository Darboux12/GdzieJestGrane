<?php

require_once "Controllers/MainPageController.php";
require_once "Controllers/SecurityController.php";
require_once "Controllers/NewsPageController.php";
require_once "Controllers/AdminController.php";
require_once "Controllers/AdController.php";



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

            'signin' => [
                'controller' => 'SecurityController',
                'action' => 'signin'
            ],

            'mainpage' => [
                'controller' => 'MainPageController',
                'action' => 'page'
            ],

            'main_page_search' => [
                'controller' => 'MainPageController',
                'action' => 'search'
            ],

            'newspage' => [
                'controller' => 'NewsPageController',
                'action' => 'getNews'
            ],

            'adminpanel' => [
                'controller' => 'AdminController',
                'action' => 'control'
            ],

            'admin_users' => [
                'controller' => 'AdminController',
                'action' => 'getUsers'
            ],

            'admin_delete_user' => [
                'controller' => 'AdminController',
                'action' => 'deleteUser'
            ],

            'admin_power_user' => [
                'controller' => 'AdminController',
                'action' => 'powerUser'
            ],

            'admin_degrade_user' => [
                'controller' => 'AdminController',
                'action' => 'degradeUser'
            ],

            'admin_find_user' => [
                'controller' => 'AdminController',
                'action' => 'findUser'
            ],

            'createAd' => [
                'controller' => 'AdController',
                'action' => 'createAd'
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