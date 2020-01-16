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

    public function getAllAds(): array{

        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM ad_view ORDER BY id_ad DESC 
        ');
        $stmt->execute();
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($ads as $ad) {
            $result[] = new Ad(
                $ad['id_ad'],
                $ad['id_user'],
                $ad['title'],
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
                             string $date, string $email,string $title, string $description, string $image){

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
            INSERT INTO ad(id_user,id_localization,
                        id_ad_details,title,description,image) 
                                   
            VALUES (
                    (SELECT  id_user FROM user WHERE email = :email),
                    (SELECT  id_localization FROM localization WHERE 
                        city = :city AND postal_code = :postal AND street = :street AND number = :number),
                    (SELECT  id_ad_details FROM ad_details WHERE 
                                                  discipline = :discipline AND 
                                                  min_age = :min_age AND 
                                                  max_age = :max_age AND 
                                                  num_people = :num_people AND 
                                                  gender =  :gender AND 
                                                  min_age = :min_age AND 
                                                  date = :date AND 
                                                  min_price = :min_price AND 
                                                  max_price = :max_price),  
                    
                    :title,:description,:image)                     
                                  
        ;');

        $stmt->bindParam(':discipline', $discipline, PDO::PARAM_STR);
        $stmt->bindParam(':min_age', $min_age, PDO::PARAM_INT);
        $stmt->bindParam(':max_age', $max_age, PDO::PARAM_INT);
        $stmt->bindParam(':num_people', $num_people, PDO::PARAM_INT);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->bindParam(':min_price', $min_price, PDO::PARAM_INT);
        $stmt->bindParam(':max_price', $max_price, PDO::PARAM_INT);

        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->bindParam(':postal', $postal_code, PDO::PARAM_STR);
        $stmt->bindParam(':street', $street, PDO::PARAM_STR);
        $stmt->bindParam(':number', $number, PDO::PARAM_INT);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function searchAd(string $localization, string $discipline, int $min_price, int $max_price, int $min_age,
                             int $max_age, int $num_people, string $gender,
                             string $date, string $title) : array{

        $argNames = ['city', 'discipline', 'min_price', 'max_price', 'min_age','max_age', 'num_people', 'gender', "date", "title"];
        $arguments = func_get_args();

        $query = "SELECT id_ad FROM ad_view WHERE";

        $bindsValues = [];
        $bindsNames = [];

        $notNullArgs = 0;
        foreach ($arguments as $argument){
            if ($argument != null){
                $notNullArgs++;
            }
        }

        $notNullIndex = 0;
        $allArgIndex = 0;

        foreach ($arguments as $argument) {


            if ($argument != null) {

                if ( $notNullIndex  == $notNullArgs - 1 ){
                    $query .= " $argNames[$allArgIndex] = :$argNames[$allArgIndex];";
                    array_push($bindsNames, $argNames[$allArgIndex]);
                    array_push($bindsValues, $argument);
                    break;
                }

                $query .= " $argNames[$allArgIndex] = :$argNames[$allArgIndex] AND";
                array_push($bindsNames, $argNames[$allArgIndex]);
                array_push($bindsValues, $argument);
                $notNullIndex++;
            }


            $allArgIndex ++;
        }

        $stmt = $this->database->connect()->prepare($query);

        $i = 0;
        foreach ($bindsValues as $value) {

            $stmt->bindParam($bindsNames[$i], $value);
            $i++;


        }

        $stmt->execute();
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $ads;

    }

}