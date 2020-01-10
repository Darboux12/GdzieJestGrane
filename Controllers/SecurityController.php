<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/User.php';
require_once __DIR__.'/../Repository/UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {
        $userRepository = new UserRepository();

        if ($this->isPost()) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $userRepository->getUser($email);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->render('login', ['messages' => ['Given email address is invalid!']]);
                return;
            }

            if (!$user) {
                $this->render('login', ['messages' => ['User with this email does not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=mainpage");
            return;
        }



        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out!']]);
    }

    public function signin(){

        if ($this->isPost()) {


            if(empty($_POST['login'])){
                $this->render('signin', ['messages' => ['Login field cannot be empty']]);
                return;
            }

            if(empty($_POST['email'])){
                $this->render('signin', ['messages' => ['Email field cannot be empty']]);
                return;
            }

            if(empty($_POST['password'])){
                $this->render('signin', ['messages' => ['Password field cannot be empty']]);
                return;
            }

            if(empty($_POST['repeatpassword'])){
                $this->render('signin', ['messages' => ['Repeat Password field cannot be empty']]);
                return;
            }

            if(empty($_POST['age'])){
                $this->render('signin', ['messages' => ['Age field cannot be empty']]);
                return;
            }

            if(empty($_POST['province'])){
                $this->render('signin', ['messages' => ['Province field cannot be empty']]);
                return;
            }

            if(empty($_POST['street'])){
                $this->render('signin', ['messages' => ['Street field cannot be empty']]);
                return;
            }

            if(empty($_POST['number'])){
                $this->render('signin', ['messages' => ['Number field cannot be empty']]);
                return;
            }

            $userRepository = new UserRepository();

            if ($userRepository->getUser($_POST['email'])) {
                $this->render('signin', ['messages' => ['User with this email already exists!']]);
                return;
            }

            if ($userRepository->getUserByLogin($_POST['login'])) {
                $this->render('signin', ['messages' => ['User with this login already exists!']]);
                return;
            }

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->render('signin', ['messages' => ['Given email address is invalid!']]);

            }

            if (!ctype_digit($_POST['age'])) {
                $this->render('signin', ['messages' => ['Age must be number!']]);
                return;
            }

            if($_POST['password'] !== $_POST['repeatpassword']){
                $this->render('signin', ['messages' => ['Password and repeated password are different!']]);
                return;
            }

            if (ctype_digit($_POST['province'])) {
                $this->render('signin', ['messages' => ['Province cannot be number!']]);
                return;
            }

            if (ctype_digit($_POST['street'])) {
                $this->render('signin', ['messages' => ['Street cannot be number!']]);
                return;
            }

            if (!ctype_digit($_POST['number'])) {
                $this->render('signin', ['messages' => ['Local number must be number!']]);
                return;
            }

            $userRepository->addUser($_POST['login'],$_POST['email'],$_POST['password'],$_POST['age'],
                'subscriber',$_POST['province'],$_POST['province'],$_POST['number']);

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Refresh:5; url={$url}?page=login");
            $this->render('signin', ['messages' => ["You signed in! <br> You wil be redirected to LogIn page in 5 seconds"]]);
            return;

        }



        $this->render('signin');

    }




}