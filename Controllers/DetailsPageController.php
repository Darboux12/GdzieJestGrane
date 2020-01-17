<?php

class DetailsPageController extends AppController {

    public function showDetails(){

        $adRepository = new AdRepository();

        if($this->isPost()){

            $ads = $adRepository->getAd($_POST['publicationId']);
            $this->render('detailsPage',["ad" => $ads]);
        }
    }


    public function joinEvent(){

        $userRepository = new UserRepository();

        $adRepository = new AdRepository();

        $userId = $userRepository->getUser($_SESSION['id'])->getId();

        $eventId = $_POST['EventId'];

        $adRepository->joinEvent($userId,$eventId);

        $adRepository->incrementViews($eventId);

        $ads = $adRepository->getAd($eventId);


        $this->render('detailsPage',["ad" => $ads]);



    }

}