<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Bajang");
var_dump($company);

$company->programmer = new FrontendProgrammer("Bajang");
var_dump($company);

$company->programmer = new BackendProgrammer("Bajang");
var_dump($company);

sayHelloProgrammer(new Programmer("Bajang"));
sayHelloProgrammer(new BackendProgrammer("Bajang"));
sayHelloProgrammer(new FrontendProgrammer("Bajang"));