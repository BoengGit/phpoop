<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Lunar";
$cat->run();

$dog = new Dog();
$dog->name = "Phoin";
$dog->run();