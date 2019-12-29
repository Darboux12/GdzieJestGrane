<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/News.php';

class NewsRepository extends Repository {

    public function getNews(int $id_news){

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM news WHERE id_news = :id
        ');
        $stmt->bindParam(':id', $id_news, PDO::PARAM_INT);
        $stmt->execute();
        $news = $stmt->fetch(PDO::FETCH_ASSOC);

        if($news == false)
            return null;

      return new News(
            $news['id_news'],
            $news['title'],
            $news['description'],
            $news['image'],
            $news['link']
        );
    }

    public function getAllNewses(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM news ORDER BY news.id_news DESC 
        ');
        $stmt->execute();
        $newses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($newses as $news) {
            $result[] = new News(
                $news['id_news'],
                $news['title'],
                $news['description'],
                $news['image'],
                $news['link']
            );
        }

        return $result;
    }

    public function getLatestNews(){

         $newsesNumber = 4;

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM news ORDER BY news.id_news DESC LIMIT :num
        ');
        $stmt->bindParam(':num', $newsesNumber, PDO::PARAM_INT);
        $stmt->execute();
        $newses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($newses as $news) {
            $result[] = new News(
                $news['id_news'],
                $news['title'],
                $news['description'],
                $news['image'],
                $news['link']
            );
        }

        return $result;

    }

}