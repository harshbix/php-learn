<?php
//if else syntax
//  $age = 5;

// if ($age >= 18) {
//     # code...
//     echo 'You are old enough to vote';
// } else 
// {
//     echo 'You are not old enough to vote';
// }

$time = date("H");

if($time < 12)
{
    echo 'Good Morning';
}
elseif ($time < 17) {
    echo 'Good Afternoon';
}
else
{
    echo 'Good Evening';
}
