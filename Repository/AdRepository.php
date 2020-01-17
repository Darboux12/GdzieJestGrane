<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/Ad.php';


class AdRepository extends Repository{

    public function getAd(int $id_ad)
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM ad_view WHERE id_ad = :id;
        ');
        $stmt->bindParam(':id', $id_ad, PDO::PARAM_INT);
        $stmt->execute();
        $ad = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($ad == false)
            return null;

        return new Ad(
            $ad['id_ad'],
            $ad['id_user_author'],
            $ad['title'],
            $ad['description'],
            $ad['image'],
            $ad['discipline'],
            $ad['price'],
            $ad['time'],
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
                $ad['id_user_author'],
                $ad['title'],
                $ad['description'],
                $ad['image'],
                $ad['discipline'],
                $ad['price'],
                $ad['time'],
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
                             string $discipline, int $price, int $time, int $min_age,
                             int $max_age, int $num_people, string $gender,
                             string $date, string $email,string $title, string $description, string $image){

          $stmt = $this->database->connect()->prepare('
          
        
          START TRANSACTION;
          
          INSERT INTO localization(city,postal_code,street,number) 
          
          VALUES (:city,:postal,:street,:number);
          
          
          INSERT INTO ad_details(discipline,min_age,max_age,num_people,involved_people,
                                   gender,date,price,time,views) 
                                   
          VALUES (:discipline,:min_age,:max_age,:num_people, 0,:gender,:date,:price,:time,0);
          
          
          INSERT INTO ad(id_user_author,id_localization,
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
                                                  price = :price AND 
                                                  time = :time),  
                    
                    :title,:description,:image);  
                  
          COMMIT;
        
           ');

           $stmt->bindParam(':city', $city, PDO::PARAM_STR);
           $stmt->bindParam(':postal', $postal_code, PDO::PARAM_STR);
           $stmt->bindParam(':street', $street, PDO::PARAM_STR);
           $stmt->bindParam(':number', $number, PDO::PARAM_INT);
           $stmt->bindParam(':discipline', $discipline, PDO::PARAM_STR);
           $stmt->bindParam(':min_age', $min_age, PDO::PARAM_INT);
           $stmt->bindParam(':max_age', $max_age, PDO::PARAM_INT);
           $stmt->bindParam(':num_people', $num_people, PDO::PARAM_INT);
           $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
           $stmt->bindParam(':date', $date, PDO::PARAM_STR);
           $stmt->bindParam(':price', $price, PDO::PARAM_INT);
           $stmt->bindParam(':time', $time, PDO::PARAM_INT);
           $stmt->bindParam(':email', $email, PDO::PARAM_STR);
           $stmt->bindParam(':title', $title, PDO::PARAM_STR);
           $stmt->bindParam(':description', $description, PDO::PARAM_STR);
           $stmt->bindParam(':image', $image, PDO::PARAM_STR);
           $stmt->execute();

    }

    public function searchAd(string $localization, string $discipline, int $price, int $time, int $min_age,
                             int $max_age, int $num_people, string $gender,
                             string $date, string $title) : array{

        $argNames = ['city', 'discipline', 'price', 'time', 'min_age','max_age', 'num_people', 'gender', "date", "title"];
        $arguments = func_get_args();

        $query = "SELECT * FROM ad_view WHERE";

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


        for($i =0; $i < $notNullArgs; $i++){
            $stmt->bindParam($bindsNames[$i],$bindsValues[$i]);

        }


        $stmt->execute();
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rows = $stmt->rowCount();




            for($i = 0; $i < $rows; $i++){
                $ads[$i]["image"] =base64_encode($ads[$i]["image"] );
            }


        return $ads;
    }

    public function joinEvent(int $id_user, int $id_ad){

        $stmt = $this->database->connect()->prepare('
        
                START TRANSACTION;
                
                INSERT INTO user_ad(id_user,id_ad) VALUES (:id_user, :id_ad);
                
                UPDATE ad_details SET involved_people = involved_people  + 1 
                WHERE id_ad_details IN (SELECT id_ad_details FROM ad WHERE id_ad = :id_ad);
                
                COMMIT;
        
        ');

        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_ad', $id_ad, PDO::PARAM_INT);
        $stmt->execute();
    }


    public function incrementViews($id_ad){


        $stmt = $this->database->connect()->prepare('
        
                START TRANSACTION;
                
                UPDATE ad_details SET views = views + 1 WHERE id_ad_details IN
                (SELECT id_ad_details FROM ad WHERE id_ad = :id_ad);
  
                COMMIT;
      
        ');

        $stmt->bindParam(':id_ad', $id_ad, PDO::PARAM_INT);
        $stmt->execute();

    }

}