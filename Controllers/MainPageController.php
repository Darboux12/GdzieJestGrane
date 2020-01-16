<?php

require_once 'AppController.php';
require_once __DIR__.'/../Repository/AdRepository.php';

class MainPageController extends AppController {

    public function page(){

        $adRepository = new AdRepository();

        $allAds = $adRepository->getAllAds();

        $this->render('mainpage',["allAds" => $allAds]);
    }

    public function search(){

        $adRepository = new AdRepository();

        header('Content-type: application/json');

        http_response_code(200);

      $searchedAd = $adRepository->searchAd(
          (string)$_POST['eventLocalization'],
          (string)$_POST['eventDiscipline'],
          (int)$_POST['eventPriceFrom'],
          (int)$_POST['eventPriceTo'],
          (int)$_POST['eventAgeFrom'],
          (int)$_POST['eventAgeTo'],
          (int)$_POST['eventPeopleNumber'],
          (string)$_POST['eventGender'],
          (string)$_POST['eventDate'],
          (string)$_POST['eventTitle']
            );








       echo $searchedAd ? json_encode($searchedAd) : '';





    }






}