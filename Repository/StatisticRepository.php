<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/Statistic.php';

class StatisticRepository extends Repository{

    public function getAllStatistics() : array {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM statistics;
        ');
        $stmt->execute();
        $stats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $stats;

    }

    public function addStatistic($date,$login){


        $stmt = $this->database->connect()->prepare('
        
   
            START TRANSACTION;
            
       SET @p0 = (SELECT DATE_SUB(NOW(), INTERVAL 1 MONTH));
       SET @p1= (SELECT NOW()); 
            
      INSERT INTO statistics(date,author,discipline,num_users,num_ads) VALUES
      
       (:date, :login,
             
      (SELECT discipline FROM ad_details GROUP BY discipline ORDER BY COUNT(discipline) DESC LIMIT 1),
             
      (SELECT `countUsersInTime`(@p0, @p1) AS `countUsersInTime`),
             
       (SELECT COUNT(id_ad) FROM ad)
       
       
       );
      
       COMMIT;
            
            
        ');

        $stmt->bindParam(':date', $date, PDO::PARAM_INT);
        $stmt->bindParam(':login', $login, PDO::PARAM_INT);




        $stmt->execute();





    }


}