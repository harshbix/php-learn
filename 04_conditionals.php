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

// $time = date("H");

// if($time < 12)
// {
//     echo 'Good Morning';
// }
// elseif ($time < 17) {
//     echo 'Good Afternoon';
// }
// else
// {
//     echo 'Good Evening';
// }

// $posts = ['first post'];

// if(!empty($posts))
// {
//     echo true;
// }else {
//     echo 'No Posts';
// }

//ternary conditionals 

// echo !empty($posts) ? $posts[0] : 'No Posts';

// if no second condition
// echo !empty($posts) ? $posts[0] : null;
//or use double question mark
// echo $posts[0] ?? null;

//switch syntax

$favcolor = null;

switch ($favcolor) {
    case 'red':
        # code...
        echo 'My favorate color is ' . $favcolor;
        break;
    case 'green':
        # code...
        echo 'My favorate color is ' . $favcolor;
        break;
    default:
        # code...
        echo 'No Color added as favorite color';
        break;
}