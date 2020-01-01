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


        }
        catch(PDOException $e) {
            die();
        }


    }

    public function findUsers(string $input){

        try {
            $stmt = $this->database->connect()->prepare('SELECT * FROM user_view
WHERE login = :data OR role = :data OR email = :data OR creation_date = :data ;');
            $stmt->bindParam(':data', $input );
            $stmt->execute();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        }
        catch(PDOException $e) {
            die();
        }
    }

}