<?php

require_once 'AppController.php';
require_once __DIR__.'/../Database.php';

class MainPageController extends AppController {

    public function getLatestPhotos()
    {
        $database = new Database();
        $database->connect();



        $this->render('mainpage');
    }
}