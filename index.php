<?php

    declare(strict_types=1);

    require_once "Beverage.php";
    require_once "Beer.php";

    $cola = new Beverage('black', 2.00);
    echo "<pre>";
        echo $cola->getInfo() ."<br>";
        echo $cola->temperature;
    echo "</pre>";

    $duvel = new Beer('blond', 3.50, 'Duvel', 8.50);
    echo "<pre>";
    echo $duvel->alcoholPercentage ."<br>";
    echo $duvel->getAlcoholPercentage() ."<br>";
    echo $duvel->color ."<br>";
    echo $duvel->getInfo() ."<br>";
    echo $cola->getAlcoholPercentage();
    echo "</pre>";
?>