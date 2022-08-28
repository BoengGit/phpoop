<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use Helper\{helpme};

$conflict = new Conflict1();
$conflict = new Dummy();
$conflict = new Sample();
