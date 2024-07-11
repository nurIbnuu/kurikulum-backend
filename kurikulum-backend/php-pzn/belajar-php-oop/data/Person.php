<?php
class Person // ini cara membuat 'class'
{
  // const
  const AUTHOR = 'Programmer Zaman Now';

  var string $name; // ini cara membuat 'properties', 'string' adalah type properties
  var ?string $address; // ini cara membuat 'properties', 'string' adalah type properties, '?string' adalah nullable properties
  var string $country = 'Indonesia'; // ini cara membuat 'properties', 'string' adalah type properties. 'Indonesia' adalah properties default value

  // Membuat function
  // this keyword
  function sayHello(?string $name) {
    if(is_null($name)) {
      echo "Hi, my name is $this->name \n";
    } else {
      echo "Hi $name, my name is $this->name \n";
    }
  }
}