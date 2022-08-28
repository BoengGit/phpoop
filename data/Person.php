<?php

class Person {
    
    const AUTHOR = "BoengGit";
    
    var string $name;
    var ?string $address;
    var string $country = "Indonesia";

    function sayHello(?string $name) {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}