<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//User.php';

class UserRepository extends Repository {

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user_address WHERE id_user_address = :id
        ');
        $stmt->bindParam(':id',  $user['id_user'], PDO::PARAM_STR);
        $stmt->execute();
        $user_address = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM role WHERE id_role = :id
        ');
        $stmt->bindParam(':id',  $user['id_user'], PDO::PARAM_STR);
        $stmt->execute();
        $user_role = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        if($user_address == false) {
            return null;
        }

        if($user_role == false) {
            return null;
        }

        return new User(
            $user['id_user'],
            $user['login'],
            $user['email'],
            $user['password'],
            $user['age'],
            $user_role['role'],
            $user_address['country'],
            $user_address['province'],
            $user_address['street'],
            $user_address['number']
        );
    }

    public function getUsers(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['email'],
                $user['password'],
                $user['name'],
                $user['surname'],
                $user['id']
            );
        }

        return $result;
    }
}