<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/Ad.php';

class AdRepository extends Repository {

    public function getAds(int $id_ad){

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM ad_view WHERE id_ad = :id
        ');
        $stmt->bindParam(':id', $id_ad, PDO::PARAM_INT);
        $stmt->execute();
        $ad = $stmt->fetch(PDO::FETCH_ASSOC);

        if($ad == false)
            return null;

        return new Ad(
            $ad['id_ad'],
            $ad['id_user'],
            $ad['title	'],
            $ad['description'],
            $ad['image'],
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

}