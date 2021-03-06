<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/Ad.php';
require_once __DIR__.'/../Repository/AdRepository.php';

class AdController extends AppController{

    const MAX_IMAGE_SIZE = 2 * 1024 * 1024;

    public function createAd(){

        $adRepository = new AdRepository();

        if ($this->isPost()) {


            foreach( $_POST as $key => $value ) {

                if(empty($value)){
                    $this->render('createAd', ['messages' => ["You must choose " . $key . '!']]);
                    return;
                }
            }

            if($_POST['min_age'] > $_POST['max_age']){
                $this->render('createAd', ['messages' => ["Minimal age cannot be bigger than maximal age!"]]);
                return;
            }

            $image = $_FILES['image']['name'];
            $imageData= file_get_contents($_FILES['image']['tmp_name']);
            $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $extensionsArray = array("jpg","jpeg","png","gif");

            if(!in_array($imageFileType,$extensionsArray) ) {
                $this->render('createAd', ['messages' => ['Choosen file is not an image!']]);
                return;
            }

            if ($_FILES['image']['size'] > self::MAX_IMAGE_SIZE) {
                $this->render('createAd', ['messages' => ['Choosen file is to large!']]);
                return;
            }

            $city = ucfirst(strtolower($_POST['city']));
            $street = ucfirst(strtolower($_POST['street']));
            $title = ucfirst(strtolower($_POST['city']));


            $adRepository->createAd($city,$_POST['postal'], $street,$_POST['number'],
                $_POST['discipline'],$_POST['price'],$_POST['time'], $_POST['min_age'],$_POST['max_age'],
                $_POST['pplnumber'],$_POST['gender'], $_POST['date'],$_SESSION['id'],
                $title,$_POST['description'],$imageData);


            $this->render('createAd',['messages' => ['Ad was successfully created!']]);

        }

       $this->render('createAd');
    }
}

