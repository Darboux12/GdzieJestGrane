<?php
/**
 * Created by PhpStorm.
 * User: Dariusz
 * Date: 18.01.2020
 * Time: 19:24
 */

class Statistic{

    private $id;
    private $date;
    private $author;
    private $discipline;
    private $users;
    private $ads;

    public function __construct(int $id, string $date, string $author, string $discipline, int $users, int $ads){

        $this->id = $id;
        $this->date = $date;
        $this->author = $author;
        $this->discipline = $discipline;
        $this->users = $users;
        $this->ads = $ads;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function getAuthor(): string{
        return $this->author;
    }

    public function getUsers(): int{
        return $this->users;
    }

    public function getDiscipline(): string{
        return $this->discipline;
    }

    public function getAds(): int{
        return $this->ads;
    }

}