<?php

class Location {
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function move(float $x, float $y): Location{
        $location = new Location($this->x + $x, $this->y + $y);
        return $location;
    }
}

$location = new Location(10, 20);
echo $location->getX()."<br>";
echo $location->getY()."<br>";
$newLocation = $location->move(10, 20);
echo $newLocation->getX()."<br>";
echo $newLocation->getY()."<br>";