
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

 ////////////////////////////////////////////////////////////////////////////////////////////////

/* Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order*/

echo "</br>"."Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order"."</br></br>";

//.....First Method

$AssociativeArrays1=array("2011"=>"batch-1","2012"=>"batch-2","2013"=>"batch-3","2014"=>"batch-4","2015"=>"batch-5");

//.....Second Method

$AssociativeArrays2['2016']="batch-6";
$AssociativeArrays2['2017']="batch-7";
$AssociativeArrays2['2018']="batch-8";
$AssociativeArrays2['2019']="batch-9";
$AssociativeArrays2['2020']="batch-10";

//.....Displaying Values as Index Values

echo "Value Of Array 1 at Key 2011 = ".$AssociativeArrays1['2011']."</br></br>";
echo "Value Of Array 2 at Key 2016 = ".$AssociativeArrays2["2016"]."</br></br>";

//.....Displaying Values Using Loops(For & Foreach)

echo "Displaying Array 1 Values Using Foraech"."</br></br>";

foreach($AssociativeArrays1 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

echo "</br>"."Displaying Array 2 Values Using Foraech"."</br></br>";

foreach($AssociativeArrays2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }


echo "</br>"."Displaying Array 1 Values Using For"."</br></br>";

$keys1=array_keys($AssociativeArrays1);

  for ($x = 0; $x < sizeof($AssociativeArrays1); $x++) 
   {
       echo "Key= ".$keys1[$x]." Value= ".$AssociativeArrays1[$keys1[$x]]." <br />";
   }
  
echo "</br>"."Displaying Array 2 Values Using For"."</br></br>";

$keys2=array_keys($AssociativeArrays2);
  
for ($x = 0; $x < sizeof($AssociativeArrays2); $x++) 
{
    echo "Key= ".$keys2[$x]." Value= ".$AssociativeArrays2[$keys2[$x]]." <br />";
}


?>