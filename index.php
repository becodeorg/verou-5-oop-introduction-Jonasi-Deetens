<?php

declare(strict_types=1);

require_once "Beverage.php";
require_once "Beer.php";

$duvel = new Beer('blond', 3.50, 'Duvel', 8.50);
echo "<pre>";
//echo $duvel->alcoholPercentage ."<br>";
echo $duvel->getAlcoholPercentage() ."<br>";
echo $duvel->getColor() ."<br>";
echo $duvel->getTemperature() ."<br>";
echo $duvel->getInfo() ."<br>";
//echo $cola->getAlcoholPercentage();
echo "</pre>";

$duvel->setColor("light");
echo $duvel->getColor() ."<br>";
echo $duvel->getBeerInfo();

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/