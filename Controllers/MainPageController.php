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

        $adRepository = new AdRepository();

       // $searchedAds = $adRepository->searchAd()


                $this->render('mainpage', ['messages' => ["You must choose " .  '!']]);
                return;









    }






}