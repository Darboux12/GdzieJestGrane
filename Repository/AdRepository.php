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

    public function createAd(string $city, string $postal_code, string $street, int $number,
                             string $discipline, int $min_price, int $max_price, int $min_age,
                             int $max_age, int $num_people, string $gender,
                             string $date, int $id_user,string $title, string $description, string $image){

          $stmt = $this->database->connect()->prepare('
               INSERT INTO localization(city,postal_code,street,number) VALUES (:city,:postal,:street,:number)
           ');

           $stmt->bindParam(':city', $city, PDO::PARAM_STR);
           $stmt->bindParam(':postal', $postal_code, PDO::PARAM_STR);
           $stmt->bindParam(':street', $street, PDO::PARAM_STR);
           $stmt->bindParam(':number', $number, PDO::PARAM_INT);
           $stmt->execute();

           $stmt = $this->database->connect()->prepare('
            INSERT INTO ad_details(discipline,min_age,max_age,num_people,involved_people,
                                   gender,date,min_price,max_price,views) 
                                   
                                   VALUES (:discipline,:min_age,:max_age,:num_people,
                                                     0,:gender,:date,:min_price,:max_price,0)
        ');

           $stmt->bindParam(':discipline', $discipline, PDO::PARAM_STR);
           $stmt->bindParam(':min_age', $min_age, PDO::PARAM_INT);
           $stmt->bindParam(':max_age', $max_age, PDO::PARAM_INT);
           $stmt->bindParam(':num_people', $num_people, PDO::PARAM_INT);
           $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
           $stmt->bindParam(':date', $date, PDO::PARAM_STR);
           $stmt->bindParam(':min_price', $min_price, PDO::PARAM_INT);
           $stmt->bindParam(':max_price', $max_price, PDO::PARAM_INT);
           $stmt->execute();

        $stmt = $this->database->connect()->prepare('
          SELECT id_localization FROM localization ORDER BY id_localization DESC LIMIT 1
        ');
        $stmt->execute();
        $id_localization = $stmt->fetch(PDO::FETCH_ASSOC)['id_localization'];


        $stmt = $this->database->connect()->prepare('
          SELECT id_ad_details FROM ad_details ORDER BY id_ad_details DESC LIMIT 1
        ');
        $stmt->execute();
        $id_details = $stmt->fetch(PDO::FETCH_ASSOC)['id_ad_details'];

        $stmt = $this->database->connect()->prepare('
            INSERT INTO ad(id_user,id_localization,
                        id_ad_details,title,description,image) 
                                   
                                   VALUES (
                                           (SELECT  id_user FROM user WHERE id_user = :id_user),
                                           (SELECT  id_localization FROM localization WHERE id_localization = :id_localization),
                                           (SELECT  id_ad_details FROM ad_details WHERE id_ad_details = :id_ad_details),
                                           :title,:description,:image)
                                           
                                           
                                           
                                  
        ');

        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_localization', $id_localization, PDO::PARAM_INT);
        $stmt->bindParam(':id_ad_details', $id_details, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->execute();

    }



}