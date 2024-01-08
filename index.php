<?php
    require_once "Beverage.php";

    $cola = new Beverage('black', 2.00);
    echo "<pre>";
        echo $cola->getInfo() ."<br>";
        echo $cola->temperature;
    echo "</pre>";
?>