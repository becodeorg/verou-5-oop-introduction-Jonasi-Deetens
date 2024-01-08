<?php

declare(strict_types=1);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color. For a small price of $this->price euro it can be yours.";
    }
}