<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/User.php';
require_once __DIR__.'/../Repository/UserMapper.php';


class AdminController extends AppController {

    public function control(){

        $this->render('adminpanel');

    }

    public function getUsers(){

        $user = new UserMapper();

        header('Content-type: application/json');

        http_response_code(200);

        echo $user->getUsers() ? json_encode($user->getUsers()) : '';

    }

    public function deleteUser(): void{

        if (!isset($_POST['id'])) {
            http_response_code(404);
            return;
        }

        $user = new UserMapper();
        $user->delete((int)$_POST['id']);
        http_response_code(200);
    }

    public function findUser() {


        if (!isset($_POST['login'])) {
            http_response_code(404);
            return;
        }

        $login = (string)$_POST['login'];

        $user = new UserMapper();

        header('Content-type: application/json');

        http_response_code(200);

        echo $user->findUsers($login) ? json_encode($user->findUsers($login)) : '';

    }


}