<?php


class Info
{

    private $name;
    private $place;
    private $time;
    private $image;
    private $price;
    private $topic;
    private $infourl;

    public function __construct($name,$place,$time,$image,$price,$topic,$infourl)
    {
        $this->name=$name;
        $this->place=$place;
        $this->time=$time;
        $this->image=$image;
        $this->price=$price;
        $this->topic=$topic;
        $this->infourl=$infourl;
    }

    public function GetInfUrl()
    {
        return $this->infourl;
    }

    public function GetName()
    {
        return $this->name;
    }
    public function GetPlace()
    {
        return $this->place;
    }
    public function GetTime()
    {
        return $this->time;
    }
    public function GetImage()
    {
        return $this->image;
    }
    public function GetPrice()
    {
        return $this->price;
    }
    public function GetTopic()
    {
        return $this->topic;
    }
}

?>