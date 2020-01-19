<?php

require_once "Repository.php";
require_once __DIR__.'/../Models/User.php';

class UserRepository extends Repository {

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_view WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false)
                return null;

        return new User(
            $user['id_user'],
            $user['login'],
            $user['email'],
            $user['password'],
            $user['age'],
            $user['role'],
            $user['province'],
            $user['street'],
            $user['number'],
            $user['creation_date']
        );
    }

    public function getUsers(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_view
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['id_user'],
                $user['login'],
                $user['email'],
                $user['password'],
                $user['age'],
                $user['role'],
                $user['province'],
                $user['street'],
                $user['number'],
                $user['creation_date']
            );
        }

        return $result;
    }

    public function getUsersWithoutLoggedIn(){

        try {



            $stmt = $this->database->connect()->prepare('SELECT * FROM user_view
WHERE email != :email;');
            $stmt->bindParam(':email', $_SESSION['id'], PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }

    public function deleteUser(int $id){

        $user = $this->getUserById($id);
        $province = $user->getProvince();
        $street = $user->getStreet();
        $number = $user->getNumber();
        $login = $user->getLogin();

        $isAddressOnlyOne = $this->isAddressOnlyOne($province,$street,$number);

        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM user_details
WHERE login = :login;');
            $stmt->bindParam(':login', $login, PDO::PARAM_STR);
            $stmt->execute();

        }
        catch(PDOException $e) {
            die($e);
        }



        if($isAddressOnlyOne){

            try {
                $stmt = $this->database->connect()->prepare('

                        START TRANSACTION;
                        
                        DELETE FROM user_address WHERE
                                    province = :province AND street = :street AND number = :number
                                    
                        COMMIT;

');
                $stmt->bindParam(':province', $province );
                $stmt->bindParam(':street', $street);
                $stmt->bindParam(':number', $number);
                $stmt->execute();

            }
            catch(PDOException $e) {
                die($e);
            }
        }

    }

    public function findUsers(string $input){

        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM user_view
WHERE (login = :data OR role = :data OR email = :data OR creation_date = :data) AND email != :email ;');
            $stmt->bindParam(':data', $input );
            $stmt->bindParam(':email', $_SESSION['id']);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }

    public function getUserByLogin(string $login): ?User{

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_view WHERE login = :login
        ');
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false)
            return null;

        return new User(
            $user['id_user'],
            $user['login'],
            $user['email'],
            $user['password'],
            $user['age'],
            $user['role'],
            $user['province'],
            $user['street'],
            $user['number'],
            $user['creation_date']
        );



    }

    public function getUserById(int $id): ?User{

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_view WHERE id_user = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false)
            return null;

        return new User(
            $user['id_user'],
            $user['login'],
            $user['email'],
            $user['password'],
            $user['age'],
            $user['role'],
            $user['province'],
            $user['street'],
            $user['number'],
            $user['creation_date']
        );



    }

    public function addUser(string $login, string $email, string $password,
                            int $age,string $role,string $province, string $street,
                            int $number){

        if(!$this->isAddressInBase($province,$street,$number)) {

            try {

                $stmt = $this->database->connect()->prepare('

                START TRANSACTION;

               INSERT INTO user_address(province,street,number) VALUES (:province,:street,:number);
               
               
               INSERT INTO user_details(id_user_address,login,age) 
               
                VALUES (
                                           (SELECT  id_user_address FROM user_address 
                                            WHERE province = :province AND street = :street AND number = :number),
                                            :login, :age);


                INSERT INTO user(id_role,id_user_details,email,password) 
               
                VALUES (
                                           (SELECT  id_role FROM user_role WHERE role = :role),
                             (SELECT  id_user_details FROM user_details WHERE login = :login),
                              :email, :password);
                              
                              
                COMMIT;
               
  
           ');

                $stmt->bindParam(':province', $province, PDO::PARAM_STR);
                $stmt->bindParam(':street', $street, PDO::PARAM_STR);
                $stmt->bindParam(':number', $number, PDO::PARAM_INT);
                $stmt->bindParam(':login', $login, PDO::PARAM_STR);
                $stmt->bindParam(':age', $age, PDO::PARAM_INT);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':role', $role, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                $stmt->execute();

            }catch(PDOException $e) {
                die($e);
            }

        }
    }

    public function powerUser(int $id){

        try {
            $stmt = $this->database->connect()->prepare('
            START TRANSACTION;
            UPDATE user
            SET id_role = 2 WHERE id_user = :id;
            COMMIT;
            ');

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

        }
        catch(PDOException $e) {
            die();
        }

    }

    public function degradeUser(int $id){

        try {
            $stmt = $this->database->connect()->prepare('

            START TRANSACTION;
            UPDATE user SET id_role = 1 WHERE id_user = :id;
            COMMIT;
            ');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

        }
        catch(PDOException $e) {
            die();
        }

    }

    public function createUserLog($user, $browser,$platform){

        try {

            $stmt = $this->database->connect()->prepare('

               INSERT INTO user_logs(browser,platform,user) 
               
               VALUES (:browser,:platform,:user);
  
           ');

            $stmt->bindParam(':platform', $platform, PDO::PARAM_STR);
            $stmt->bindParam(':browser', $browser, PDO::PARAM_STR);
            $stmt->bindParam(':user', $user, PDO::PARAM_STR);
            $stmt->execute();

        }catch(PDOException $e) {
            die($e);
        }

    }

    private function isAddressInBase(string $province,string $street,int $number) : bool {

        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM user_address
WHERE province = :province AND street = :street AND number = :number;');
            $stmt->bindParam(':province', $province );
            $stmt->bindParam(':street', $street);
            $stmt->bindParam(':number', $number);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return !empty($user);
        }
        catch(PDOException $e) {
            die($e);
        }

    }

    private function isAddressOnlyOne(string $province,string $street,int $number) : bool{


        try {
            $stmt = $this->database->connect()->prepare('
                        SELECT * FROM user_details 
                        WHERE id_user_address IN 
                        (SELECT id_user_address FROM  user_address WHERE 
                        province = :province AND street = :street AND number = :number); ');
            $stmt->bindParam(':province', $province );
            $stmt->bindParam(':street', $street);
            $stmt->bindParam(':number', $number);
            $stmt->execute();
            $count = $stmt->rowCount();

            return $count == 1;


        }
        catch(PDOException $e) {
            die($e);
        }



    }

    public function getBrowser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'Linux';
        }
        elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'Mac';
        }
        elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'Windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        }
        elseif(preg_match('/Firefox/i',$u_agent))
        {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        }
        elseif(preg_match('/Chrome/i',$u_agent))
        {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        }
        elseif(preg_match('/Safari/i',$u_agent))
        {
            $bname = 'Apple Safari';
            $ub = "Safari";
        }
        elseif(preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Opera';
            $ub = "Opera";
        }
        elseif(preg_match('/Netscape/i',$u_agent))
        {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {

            if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            }
            else {
                $version= $matches['version'][1];
            }
        }
        else {
            $version= $matches['version'][0];
        }


        if ($version==null || $version=="") {$version="?";}

        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'    => $pattern
        );
    }



}