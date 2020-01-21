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

        http_response_code(200);

        $userRepository = new UserRepository();

        $adRepository = new AdRepository();

        $userId = $userRepository->getUser($_SESSION['id'])->getId();

        $eventId = $_POST['EventId'];


        if($adRepository->isUserJoinedEvent($eventId,$userId)){

            echo "You already joined!";
            return;

        }

        $adRepository->joinEvent($userId,$eventId);

        $adRepository->incrementViews($eventId);

        $ads = $adRepository->getAd($eventId);


        echo "Joined!";
        return;



    }

}