<?php

require_once 'AppController.php';
require_once __DIR__.'/../Models/Ad.php';
require_once __DIR__.'/../Repository/AdRepository.php';

class AdController extends AppController
{

    public function createAd(){

        $adRepository = new AdRepository();

        if ($this->isPost()) {

       /*    if (empty($_POST['title'])) {
                $this->render('createAd', ['messages' => ['You must choose title! ']]);
                return;
            }

            if (empty($_POST['date'])) {
                $this->render('createAd', ['messages' => ['You must choose date!']]);
                return;
            }

            if (empty($_POST['city'])) {
                $this->render('createAd', ['messages' => ['You must choose city!']]);
                return;
            }

            if (empty($_POST['postal'])) {
                $this->render('createAd', ['messages' => ['You must choose postal code!']]);
                return;
            }

            if (empty($_POST['street'])) {
                $this->render('createAd', ['messages' => ['You must chooses street!']]);
                return;
            }

            if (empty($_POST['number'])) {
                $this->render('createAd', ['messages' => ['You must choose locality number!']]);
                return;
            }

            if (empty($_POST['discipline'])) {
                $this->render('createAd', ['messages' => ['You must choose discipline! ']]);
                return;
            }

            if (empty($_POST['pplnumber'])) {
                $this->render('createAd', ['messages' => ['You must choose number of people! ']]);
                return;
            }

            if (empty($_POST['gender'])) {
                $this->render('createAd', ['messages' => ['You must choose gender']]);
                return;
            }

            if (empty($_POST['postal'])) {
                $this->render('createAd', ['messages' => ['You must choose postal code!']]);
                return;
            }

            if (empty($_POST['min_age'])) {
                $this->render('createAd', ['messages' => ['You must choose min age!']]);
                return;
            }

            if (empty($_POST['max_age'])) {
                $this->render('createAd', ['messages' => ['You must choose max age!']]);
                return;
            }

            if (empty($_POST['min_price'])) {
                $this->render('createAd', ['messages' => ['You must choose min price!']]);
                return;
            }

            if (empty($_POST['max_price'])) {
                $this->render('createAd', ['messages' => ['You must choose max price!']]);
                return;
            }

            if (empty($_POST['image'])) {
                $this->render('createAd', ['messages' => ['You must choose image!']]);
                return;
            }

            if (empty($_POST['description'])) {
                $this->render('createAd', ['messages' => ['You must choose description!']]);
                return;
            }

            if (empty($_SESSION['id'])) {
                $this->render('createAd', ['messages' => ['You are not logged in!']]);
                return;
            } */

            $adRepository->createAd();
        }

        $this->render('createAd');
    }
}