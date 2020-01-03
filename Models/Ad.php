<?php

class Ad{
    private $id;
    private $id_user;
    private $title;
    private $description;
    private $image;
    private $min_age;
    private $max_age;
    private $num_people;
    private $involved_people;
    private $gender;
    private $date;
    private $views;
    private $city;
    private $postal_code;
    private $street;
    private $number;


    public function __construct(int $id, int $id_user, string $title, string $description, string $image,
                                int $min_age, int $max_age, int $num_people, int $involved_people,string $gender,
                                string $date, int $views, string $city, string $postal_code, string $street,
                                int $number){

        $this->id = $id;
        $this->id_user = $id_user;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->min_age = $min_age;
        $this->max_age = $max_age;
        $this->num_people = $num_people;
        $this->involved_people = $involved_people;
        $this->date = $date;
        $this->views = $views;
        $this->city = $city;
        $this->postal_code = $postal_code;
        $this->street = $street;
        $this->number = $number;
        $this->gender = $gender;
    }


    public function getId(): int{
        return $this->id;
    }

    public function getIdUser(): int{
        return $this->id_user;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function getImage(): string{
        return $this->image;
    }

    public function getMinAge(): int{
        return $this->min_age;
    }

    public function getMaxAge(): int{
        return $this->max_age;
    }

    public function getNumPeople(): int{
        return $this->num_people;
    }

    public function getInvolvedPeople(): int{
        return $this->involved_people;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function getViews(): int{
        return $this->views;
    }

    public function getCity(): string{
        return $this->city;
    }

    public function getPostalCode(): string{
        return $this->postal_code;
    }

    public function getStreet(): string{
        return $this->street;
    }

    public function getNumber(): int{
        return $this->number;
    }

    public function getGender(): string{
        return $this->gender;
    }

}