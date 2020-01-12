<?php

require_once 'AppController.php';
// require_once __DIR__.'/../Database.php';

class MainPageController extends AppController {

    public function page(){

        $adRepository = new AdRepository();

        $allAds = $adRepository->getAllAds();

        $this->render('mainpage',["allAds" => $allAds]);
    }

    public function search(){

       // if(isset($_POST['eventTitle'])){
       //     $this->render('newspage');
      //  }

        http_response_code(200);
        return;





    }






}