<?php

require_once 'AppController.php';
require_once __DIR__.'/../Repository/NewsRepository.php';

class NewsPageController extends AppController {


    public function getNews()
    {
        $newsRepository= new NewsRepository();

        $allNewses = $newsRepository->getAllNewses();

        $latestNewses = $newsRepository->getLatestNews();


        $this->render('newspage',["allNewses" => $allNewses,"latestNewses" => $latestNewses]);
    }
}