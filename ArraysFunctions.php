<?php
/* Php-Arrays Built-in Function */

//sizeof($arr)

$lamborghinis = array("Urus", "Huracan", "Aventador");
echo "Size of the array is: ". sizeof($lamborghinis);

//is_array($arr)

$lamborghinis = array("Urus", "Huracan", "Aventador");

// using ternary operator
echo is_array($lamborghinis) ? 'Array' : 'not an Array';

$mycar = "Urus";

// using ternary operator
echo is_array($mycar) ? 'Array' : 'not an Array';



//in_array($var, $arr)


$lamborghinis = array("Urus", "Huracan", "Aventador");

// new concept car by lamborghini
$concept = "estoque";

echo in_array($concept, $lamborghinis) ? 'Added to the Lineup' : 'Not yet!'

?>