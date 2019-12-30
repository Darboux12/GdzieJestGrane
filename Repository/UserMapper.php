<?php


class UserMapper extends Repository {

    public function getUsers()
    {
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

}