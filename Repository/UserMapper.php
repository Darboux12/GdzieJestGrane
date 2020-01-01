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

    public function delete(int $id): void{

        try {
            $stmt = $this->database->connect()->prepare('DELETE FROM user
WHERE id_user = :id;');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $stmt = $this->database->connect()->prepare('DELETE FROM user_details 
    WHERE user_details.id_user_details in (SELECT user.id_user_details FROM user where user.id_user = :id);');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();


        }
        catch(PDOException $e) {
            die();
        }


    }

    public function findUsers(string $login){

        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM user_view
WHERE login = :email;');
            $stmt->bindParam(':email', $login, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }

}