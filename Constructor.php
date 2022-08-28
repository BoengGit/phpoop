<?php

require_once 'data/Person.php';

$person = new Person("Bajang", null);

$person->sayHello(null);

var_dump($person);