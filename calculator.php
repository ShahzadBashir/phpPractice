<?php

/* Calculator Using Else-If*/
$number1 = 6;
$number2 = 8;
$oper = "ADD";
if(!$number1){
echo("You must enter number 1");
exit;
}
if(!$number2){
echo("You must enter number 2");
exit;
}
if(!$oper){
echo("You must select an operation to do with the numbers!");
exit;
}
if(!eregi("[0-9]", $number1)){
echo("Number 1 MUST be numbers!");
exit;
}
if(!eregi("[0-9]", $number2)){
echo("Number 2 MUST be numbers!");
exit;
}
if($oper == "ADD"){
$result =$number1 + $number2;
echo("The sum of $number1 and $number2 is $result<br><br>");
echo("$number1 + $number2 = $result");
exit;
}
if($oper == "SUBTRACT"){
$result =$number1 - $number2;
echo("The difference of $number1 and $number2 is $result<br><br>");
echo("$number1 - $number2 = $result");
exit;
}
if($oper == "DIVIDE"){
$result =$number1 / $number2;
echo("The division of $number1 and $number2 is $result<br><br>");
echo("$number1 / $number2 = $result");
exit;
}
if($oper == "MULTIPLY"){
$result =$number1 * $number2;
echo("The product of $number1 and $number2 is $result<br><br>");
echo("$number1 * $number2 = $result");
exit;
}

?>