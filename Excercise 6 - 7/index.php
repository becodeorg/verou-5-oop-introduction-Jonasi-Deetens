<?php

declare(strict_types=1);

require_once "Beverage.php";
require_once "Beer.php";

const barname = "Het vervolg";
echo barname . "<br>";

$duvel = new Beer('blond', 3.50, 'Duvel', 8.50);
echo "<pre>";
echo $duvel->servedBy(barname) ."<br>";
echo $duvel->madeBy(barname) ."<br>";

$privateVal = Beverage::getAddress();
echo $privateVal ."<br>";
echo $duvel->getAddress();
echo "</pre>";