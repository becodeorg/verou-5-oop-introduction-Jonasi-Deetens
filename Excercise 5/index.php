<?php

declare(strict_types=1);

require_once "Beverage.php";

$cola = new Beverage('black', 2.20);
echo $cola->getInfo() ."<br>";
echo $cola->color ."<br>";