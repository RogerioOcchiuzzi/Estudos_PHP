<?php 
namespace fub;

  include 'Cat.php';
  include 'Dog.php';
  include 'Animal.php';
  
  use foo as feline;
  use test\bar as canine;
  use animate;
  
  echo feline\Cat::says(), "<br />\n";
  echo canine\Dog::says(), "<br />\n";
  echo animate\Animal::breathes(), "<br />\n"; 
  
?>