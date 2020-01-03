<?php

require_once 'AppController.php';




class CreateEventPageController extends AppController{

    public function showPage(){
        $this->render('createEvent');
    }


    public function createEvent(){

       echo ("Hej");


       // $this->render('createEvent');
    }

}