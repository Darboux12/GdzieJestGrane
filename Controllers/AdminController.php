<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/User.php';
require_once __DIR__.'/../Repository/UserRepository.php';


class AdminController extends AppController {

    public function control(){

        $this->render('adminpanel');

    }

    public function getUsers(){

        $user = new UserRepository();

        header('Content-type: application/json');

        http_response_code(200);

        echo $user->getUsersWithoutLoggedIn() ? json_encode($user->getUsersWithoutLoggedIn()) : '';

    }

    public function deleteUser(){

        if (!isset($_POST['id'])) {
            http_response_code(404);
            return;
        }

        $user = new UserRepository();
        $user->deleteUser((int)$_POST['id']);
        http_response_code(200);
        return;
    }

    public function findUser() {


        if (!isset($_POST['login'])) {
            http_response_code(404);
            return;
        }

        $login = (string)$_POST['login'];

        $user = new UserRepository();

        header('Content-type: application/json');

        http_response_code(200);

        echo $user->findUsers($login) ? json_encode($user->findUsers($login)) : '';

    }

    public function powerUser(){

        if (!isset($_POST['id'])) {
            http_response_code(404);
            return;
        }

        $user = new UserRepository();
        $user->powerUser((int)$_POST['id']);
        http_response_code(200);
        return;


    }


}