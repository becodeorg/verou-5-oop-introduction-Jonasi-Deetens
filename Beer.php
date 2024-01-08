<?php

declare(strict_types=1);

require_once "Beverage.php";
class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }

    public function beerInfo()
    {
        return "Hi I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a ". $this->getColor() . " color.";
    }
}