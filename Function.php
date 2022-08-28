<?php

require_once "data/Person.php";

$person1 = new Person("Bajang", "Lombok");
$person1->name = "Bajang";
$person1->sayHello("Gilang");

$person2 = new Person("Gilang", "Jakarta");
$person2->name = "Gilang";
$person2->sayHello(null);

$person1->info();
$person2->info();
