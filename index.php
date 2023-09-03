<?php

// 1 - Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position

// for ($i = 1; $i <= 10; $i++) {
//     echo ($i == 10) ?  $i : "$i-";
// }


// 2 - Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz" 
// $x = "Fizz";
// $y = "Buzz";
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 == 0) {
//         echo $x . "<br>";
//     } else if ($i % 5 == 0) {
//         echo $y . "<br>";
//     } else if ($i % 3 == 0 || $i % 5 == 0) {
//         echo $x . $y . "<br>";
//     } else
//         echo $i . "<br>";
// }

// 3-Create a script using a for loop to add all the integers between 0 and 30 and display the total 
// $totle = 0;
// for ($i = 0; $i <= 30; $i++) {
//     $totle += $i;
// }
// echo "The sum of the numbers 0 to 30 is : $totle";

// 4-Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number
//  Example : the factorial of 4 is 4*3*2*1= 24
// $fact = 1;
// $num = 4;
// for ($i = $num; $i >= 1; $i--) {
// $fact *= $i;
// }
// echo $fact;


// 5 - Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.
// $i = 1;
// while ($i <= 15) {
//     echo ($i % 2 == 1) ? $i . "<br>" : "";
//     $i++;
// }

// 6 - Write a PHP program that prints the even numbers from 1 to 15 using a while loop.
// $i = 1;
// while ($i <= 15) {
//     echo ($i % 2 == 0) ? $i . "<br>" : "";
//     $i++;
// }

//  7 -Write a PHP program that prints all the numbers between 1 and 100 that are divisible by 3 using a do while loop

// $i = 1;
// do {

//     echo ($i % 3 == 0) ? $i . "<br>" : "";

//     $i++;
// } while ($i <= 100);

// 8 - Make a calculator with these operations using if and else if
// $operator = "/";
// $x = 4;
// $y = 4;
// $totle = 0;
// if ($operator == "+") {
//     $totle += $x + $y;
// }
// if ($operator == "-") {
//     $totle -= $x - $y;
// }
// if ($operator == "*") {
//     $totle = 1;
//     $totle *= $x * $y;
// }
// if ($operator == "/") {
//     $totle = 1;
//     $totle /= $x / $y;
// }
// if ($operator == "%") {
//     $totle = $x % $y;
// }
// echo $totle;