<?php

require_once "data/Person.php";

// Person 1
$person1 = new Person();
$person1->name = "Bajang";
$person1->address = "Lombok";
$person1->country = "Indonesia";

// Person 2
$person2 = new Person();
$person2->name = "Gilang";
$person2->address = null;
$person2->sayHello($person2->name);

// // ERROR
// $person2->name = [];

var_dump($person1);
var_dump($person2);

// Person 1
echo "Name : $person1->name" . PHP_EOL;
echo "Addres : $person1->address" . PHP_EOL;
echo "Country : $person1->country" . PHP_EOL;

// Person 2
echo "Name : $person2->name" . PHP_EOL;
echo "Addres : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;
