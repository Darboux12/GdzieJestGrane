<?php

class User {
    private $id;
    private $role;
    private $login;
    private $email;
    private $password;
    private $province;
    private $street;
    private $number;
    private $age;
    private $creation_date;

    public function __construct(int $id,string $login, string $email, string $password,
                                int $age,string $role,string $province, string $street,
                                int $number,string $creation_date) {

        $this->id = $id;
        $this->role = $role;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
        $this->province = $province;
        $this->street = $street;
        $this->number = $number;
        $this->age = $age;
        $this->creation_date = $creation_date;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function getLogin(): string{
        return $this->login;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string{
        return $this->password;
    }

    public function getLanguage(): string{
        return $this->language;
    }

    public function getCountry(): string{
        return $this->country;
    }

    public function getProvince(): string{
        return $this->province;
    }

    public function getStreet(): string{
        return $this->street;
    }

    public function getNumber(): int{
        return $this->number;
    }

    public function getAge(): int{
        return $this->age;
    }

    public function getCreationDate(): string{
        return $this->creation_date;
    }


}