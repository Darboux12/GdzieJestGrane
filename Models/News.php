<?php

class News{

    private $id;
    private $title;
    private $description;
    private $image;
    private $link;

    public function __construct(int $id, string  $title, string  $description, string $image,string  $link){
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getDescription(): string{
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getLink(): string{
        return $this->link;
    }

}