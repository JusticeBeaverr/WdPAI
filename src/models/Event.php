<?php

class Event
{
    private $title;
    private $description;
    private $image;
    private $date;
    private $like;
    private $dislike;
    private $uncertain;
    private $id;
    private $location;

    public function __construct($title, $description, $image, $date, $location, $like = 0, $dislike = 0, $uncertain = 0, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->date = $date;
        $this->location = $location;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->uncertain = $uncertain;
        $this->id = $id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location): void
    {
        $this->location = $location;
    }


    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }

    public function getUncertain()
    {
        return $this->uncertain;
    }

    public function setUncertain($uncertain): void
    {
        $this->uncertain = $uncertain;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }


}