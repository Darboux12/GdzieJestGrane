<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/Ad.php';

class AdRepository extends Repository{

    public function getAd(int $id_ad)
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM ad_view WHERE id_ad = :id
        ');
        $stmt->bindParam(':id', $id_ad, PDO::PARAM_INT);
        $stmt->execute();
        $ad = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($ad == false)
            return null;

        return new Ad(
            $ad['id_ad'],
            $ad['id_user'],
            $ad['title	'],
            $ad['description'],
            $ad['image'],
            $ad['discipline'],
            $ad['min_price'],
            $ad['max_price'],
            $ad['min_age'],
            $ad['max_age'],
            $ad['num_people'],
            $ad['involved_people'],
            $ad['gender'],
            $ad['date'],
            $ad['views'],
            $ad['city'],
            $ad['postal_code'],
            $ad['street'],
            $ad['number']
        );
    }

    public function getAllNewses(): array{
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

    public function getAds(): array
    {

        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM ad_view ORDER BY ad.id_ad DESC 
        ');
        $stmt->execute();
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($ads as $ad) {
            $result[] = new Ad(
                $ad['id_ad'],
                $ad['id_user'],
                $ad['title	'],
                $ad['description'],
                $ad['image'],
                $ad['discipline'],
                $ad['min_price'],
                $ad['max_price'],
                $ad['min_age'],
                $ad['max_age'],
                $ad['num_people'],
                $ad['involved_people'],
                $ad['gender'],
                $ad['date'],
                $ad['views'],
                $ad['city'],
                $ad['postal_code'],
                $ad['street'],
                $ad['number']
            );
        }

        return $result;

    }




}