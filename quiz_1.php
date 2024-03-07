<?php
/* 
    1. array manipulation.
        -write a php script that takes an array of numbers as input 
        create a new array containing only the even numbers from the 
        original array, and then display the result.
*/
$myArr = [5, 6, 45, 34, 23, 78, 2, 4, 89];
$newArray = array();
foreach ($myArr as $arrNumber) {
    # code...
    if ($arrNumber % 2 == 0) {
        # code...
        $newArray[] = $num ;
    } else {
        # code...
        echo 'no even number';
    }
    
}

echo 'The even numbers are: ';
var_dump($newArray);

/*
    2. conditional logic:
        - develop a php program that prompts the user to enter 
        their age 
        Based on their age, use conditional statements to
        output different messages.
        For example if the age is below 
        18 display "You are a minor"
        if between 18 and 65 display "you are an adult"
         and if above 65 display "you are a senior citizen"    
*/
$age = 78;
if($age < 18)
{
    echo "You are a minor";
}
elseif ($age < 65 && $age > 18)
{
    echo "you are an adult";
}
elseif($age >= 65)
{
    echo "you are a senior citizen";
}
else
{
    echo "invalid input";
}
echo "</br>";
/*
    3.Variable Operations:
        - Create a php script that initializes two variables
        one containing a string and the other a number.
        concatinate the string with the number and display 
        the result. Then perfom a mathematical operation on the
        number (eg square it) and display the updated value.
*/

$strVar = 'hello';
$numVar = 4;

echo "concatinated : $strVar . $numVar";
echo "</br>";
echo "operated : " . $numVar ** 2
?>