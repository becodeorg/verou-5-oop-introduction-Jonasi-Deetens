<?php

declare(strict_types=1);

class Beverage
{
    private static $address = "Melkmarkt 9, 2000 Antwerpen";
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public static function getAddress() 
    {
        return self::$address;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color. For a small price of $this->price euro it can be yours.";
    }

    public function madeBy(string $barname)
    {
        return "Made by Luis from " . $barname;
    }
}