<?php
/* Php-Arrays Built-in Function */

//sizeof($arr)
//This function returns the size of the array or the number of data elements stored in the array.

$lamborghinis = array("Urus", "Huracan", "Aventador");
echo "Size of the array is: ". sizeof($lamborghinis);

//is_array($arr)
//To check whether the provided data is in form of an array

$lamborghinis = array("Urus", "Huracan", "Aventador");

// using ternary operator
echo is_array($lamborghinis) ? 'Array' : 'not an Array';

$mycar = "Urus";

// using ternary operator
echo is_array($mycar) ? 'Array' : 'not an Array';



//in_array($var, $arr)
//When using an array, we may often want to check whether a certain value is present in the array or not

$lamborghinis = array("Urus", "Huracan", "Aventador");

// new concept car by lamborghini
$concept = "estoque";

echo in_array($concept, $lamborghinis) ? 'Added to the Lineup' : 'Not yet!'


//print_r($arr)
//Although this is not an array function, but it deserves a special mention here, as we can use this function to print the array in the most descriptive way possible

$lamborghinis = array("Urus", "Huracan", "Aventador");
print_r($lamborghinis);

//array_merge($arr1, $arr2)
//If you want to combine two different arrays into a single array, you can do so using this function


$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Hyundai" => "i20",
    "Tata" => "Tigor"
);

// friends who own the above cars
$friends = array("Vinod", "Javed", "Navjot", "Samuel");

// let's merge the two arrays into one
$merged = array_merge($hatchbacks, $friends);

print_r($merged);


//array_values($arr)
//If we want to take all the values from associative array, without the keys, and store them in a separate array

$hatchbacks = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Hyundai" => "i20",
    "Tata" => "Tigor"
);

// friends who own the above cars
$friends = array("Vinod", "Javed", "Navjot", "Samuel");

// let's merge the two arrays into one
$merged = array_merge($hatchbacks, $friends);

//getting only the values
$merged = array_values($merged);

print_r($merged);

//array_keys($arr)
//Just like values, we can also extract just the keys from an array.

//getting only the keys
$keys = array_values($merged);

print_r($keys);

//array_pop($arr)
//This function removes the last element of the array. Hence it can be used to remove one element from the end.

$lamborghinis = array("Urus", "Huracan", "Aventador");

// removing the last element
array_pop($lamborghinis);

print_r($lamborghinis);

//array_push($arr, $val)
//This can be used to add a new element at the end of the array

$lamborghinis = array("Urus", "Huracan", "Aventador");

// adding a new element at the end
array_push($lamborghinis, "Estoque");

print_r($lamborghinis);

?>