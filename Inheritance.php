<?php

require_once 'data/VicePresident.php';

$manager = new VicePresident("Gilang");
$manager->sayHello("Bro");

$manager2 = new VicePresident("Bajang");
$manager2->sayHello("Lang");
