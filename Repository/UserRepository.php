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
}