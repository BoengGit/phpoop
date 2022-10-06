<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Bajang";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Gilang";
$vp->sayHello("Joko");
