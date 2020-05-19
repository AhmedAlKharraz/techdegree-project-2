<?php

// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);

/*
$questionsArr = [];
for($i=0; $i < 10;  $i++) {
    $left = rand(0,100);
    $right = rand(0,100);
    $correct = $left + $right;
    do{
       $first_incorrect = $correct +  rand(-20, 20);
       $second_incorrect =  $correct + rand(-20,20);
    } while (($first_incorrect == $second_incorrect) || (($first_incorrect || $second_incorrect) == $correct));
   $questionsArr[] = [
       "leftAdder" => $left,
        "rightAdder" => $right,
        "correctAnswer" => $correct,
        "firstIncorrectAnswer" => $first_incorrect,
        "secondIncorrectAnswer" => $second_incorrect,
   ];
}
*/

$questions[] =
    [
        "leftAdder" => 3,
        "rightAdder" => 4,
        "correctAnswer" => 7,
        "firstIncorrectAnswer" => 8,
        "secondIncorrectAnswer" => 10,
    ];
$questions[] =
    [
        "leftAdder" => 16,
        "rightAdder" => 32,
        "correctAnswer" => 48,
        "firstIncorrectAnswer" => 52,
        "secondIncorrectAnswer" => 61,
    ];
$questions[] =
    [
        "leftAdder" => 45,
        "rightAdder" => 12,
        "correctAnswer" => 57,
        "firstIncorrectAnswer" => 63,
        "secondIncorrectAnswer" => 55,
    ];
$questions[] =
    [
    "leftAdder" => 42,
    "rightAdder" => 18,
    "correctAnswer" => 60,
    "firstIncorrectAnswer" => 69,
    "secondIncorrectAnswer" => 57
    ];
$questions[] =
    [
    "leftAdder" => 96,
    "rightAdder" => 20,
    "correctAnswer" => 116,
    "firstIncorrectAnswer" => 120,
    "secondIncorrectAnswer" => 110
    ];
$questions[] =
    [
    "leftAdder" => 44,
    "rightAdder" => 85,
    "correctAnswer" => 129,
    "firstIncorrectAnswer" => 132,
    "secondIncorrectAnswer" => 126
    ];
$questions[] =
    [
    "leftAdder" => 51,
    "rightAdder" => 35,
    "correctAnswer" => 86,
    "firstIncorrectAnswer" => 96,
    "secondIncorrectAnswer" => 82
    ];
$questions[] =
    [
    "leftAdder" => 5,
    "rightAdder" => 61,
    "correctAnswer" => 66,
    "firstIncorrectAnswer" => 65,
    "secondIncorrectAnswer" => 74
    ];
$questions[] =
    [
    "leftAdder" => 26,
    "rightAdder" => 19,
    "correctAnswer" => 45,
    "firstIncorrectAnswer" => 40,
    "secondIncorrectAnswer" => 39
    ];
$questions[] =
    [
    "leftAdder" => 26,
    "rightAdder" => 35,
    "correctAnswer" => 61,
    "firstIncorrectAnswer" => 59,
    "secondIncorrectAnswer" => 51
    ];


?>