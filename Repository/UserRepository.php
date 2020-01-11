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
                                        DELETE FROM user_address WHERE
                                        province = :province AND street = :street AND number = :number');
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
                            int $number,string $date){

        if(!$this->isAddressInBase($province,$street,$number)) {

            try {

                $stmt = $this->database->connect()->prepare('
               INSERT INTO user_address(province,street,number) VALUES (:province,:street,:number)
           ');

                $stmt->bindParam(':province', $province, PDO::PARAM_STR);
                $stmt->bindParam(':street', $street, PDO::PARAM_STR);
                $stmt->bindParam(':number', $number, PDO::PARAM_INT);
                $stmt->execute();

            }catch(PDOException $e) {
                die($e);
            }

        }



        try {

            $stmt = $this->database->connect()->prepare('
               INSERT INTO user_details(id_user_address,login,age,creation_date) 
               
                VALUES (
                                           (SELECT  id_user_address FROM user_address 
                                            WHERE province = :province AND street = :street AND number = :number),
                                            :login, :age, :creation_date);
            ');

            $stmt->bindParam(':province', $province, PDO::PARAM_STR);
            $stmt->bindParam(':street', $street, PDO::PARAM_STR);
            $stmt->bindParam(':number', $number, PDO::PARAM_INT);
            $stmt->bindParam(':login', $login, PDO::PARAM_STR);
            $stmt->bindParam(':age', $age, PDO::PARAM_INT);
            $stmt->bindParam(':creation_date', $date, PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e) {
            die($e);
        }


        try {

            $stmt = $this->database->connect()->prepare('
               INSERT INTO user(id_role,id_user_details,email,password) 
               
                VALUES (
                                           (SELECT  id_role FROM user_role WHERE role = :role),
                             (SELECT  id_user_details FROM user_details WHERE login = :login),
                              :email, :password);
                                          
            ');

            $stmt->bindParam(':login', $login, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e) {
            die($e);
        }

    }

    public function powerUser(int $id){

        try {
            $stmt = $this->database->connect()->prepare('UPDATE user
            SET id_role = 2 WHERE id_user = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

        }
        catch(PDOException $e) {
            die();
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

}