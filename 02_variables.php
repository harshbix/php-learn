<?php
/*
------------PHP DATA TYPES-----------
- String - a series of characters surrounded by quotes.
- integer - a whole number
- float - a decimal number
- boolean - true or false / zero or one
- Array - Special variable, which holds more than one value.
- Object - A class.
- Null - Empty variable
- resource - a special varible that holds a resource.

*/
/*
--------------VARIABLES RULES---------------
1. Must be prefixed with $
2. Must start with a letter or the underscore.
3. Can't start with a number.
4. Can only contain  alpha-numeric characters and underscore.
   (A-z, 0-9 , and _)
5. varibles are case sensitive.
   ($name is different from $NAME.)
*/

$name = 'Junior'; //string
$_age = 21; // integer
$isMarried = true; //boolean
$scores = [67, 81, 89, 21, 48];
$adress;

// echo "My name is $name and i am $_age y/o </br>";
// var_dump($_age)

//constants are used if you know for a fact the value is never going to change.
//syntax of a constant

define('db_name', 'school attendants');


define('HOST', 'localhost');
echo HOST
?>