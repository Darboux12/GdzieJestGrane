<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/User.php';
require_once __DIR__.'/../Repository/UserMapper.php';


class AdminController extends AppController {

    public function control(){



        $this->render('adminpanel');

    }

    public function users(){

        $user = new UserMapper();

        header('Content-type: application/json');
        http_response_code(200);



        echo $user->getUsers() ? json_encode($user->getUsers()) : '';



    }

}