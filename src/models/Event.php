<?php

class Event
{
    private $title;
    private $description;
    private $date;
    private $image;

    public function __construct($title, $description, $date, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->image = $image;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDate() : string
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getImage() : string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }


}