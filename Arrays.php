<?php

/* Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion*/

echo "Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion"."</br></br>";

//.....First Method

$numericArrays1=array("batch-1","batch-2","batch-3","batch-4","batch-5");

//.....Second Method

$numericArrays2[0]="batch-6";
$numericArrays2[1]="batch-7";
$numericArrays2[2]="batch-8";
$numericArrays2[3]="batch-9";
$numericArrays2[4]="batch-10";

//.....Displaying Values as Index Values

echo "Value Of Array 1 at Index 0 = ".$numericArrays1[0]."</br></br>";
echo "Value Of Array 2 at Index 0 = ".$numericArrays2[0]."</br></br>";

//.....Displaying Values Using Loops(For & Foreach)

echo "Displaying Array 1 Values Using Foraech"."</br></br>";

foreach( $numericArrays1 as $value ) 
 {
    echo "Value is $value <br />";
 }

echo "</br>"."Displaying Array 2 Values Using Foraech"."</br></br>";

foreach( $numericArrays2 as $value ) 
 {
     echo "Value is $value <br />";
 }

echo "</br>"."Displaying Array 1 Values Using For"."</br></br>";

for ($x = 0; $x < sizeof($numericArrays1); $x++) 
 {
     echo "Value is "."$numericArrays1[$x]"." <br />";
 }

echo "</br>"."Displaying Array 2 Values Using For"."</br></br>";

for ($x = 0; $x < sizeof($numericArrays2); $x++) 
 {
     echo "Value is "."$numericArrays2[$x]"." <br />";
 }

?>