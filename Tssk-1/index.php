<?php
//Task 1 - Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit
// $x = 555;
// $thirdDight = ($x % 10);
// $secondDight = (($x / 10) % 10);
// $firstDight = (($x / 100) % 10);
// $totle = ($firstDight + $secondDight) * $thirdDight;
// echo $totle . "<br>";



//Task 2 - A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x 1)
// const length = 5;
// const width = 10;
// $area = length * width;
// $height = 4;
// $sizeBox = $area * $height;
// echo $sizeBox;



//Task 3 - Write a PHP script that takes a number integer representing the hours and converts it to seconds;
// $hour = 1;
// $second = $hour * 60 * 60;
// echo $second;


//Task 4 - Write a PHP script that calculates the Area of a Triangle store the base and height Print the area
// $base = 5;
// $height = 5;
// $area = 0.5 * $base * $height;
// echo $area;



// Task 5 - Write a PHP script that takes the age in years and prints the age in days.
// $year = 12;
// $CalcDay = $year * 365;
// if ($year % 4 == 0) {
//     $DayIncrament = $year / 4;
//     echo $CalcDay + $DayIncrament;
// } else {
//     $rem = $year % 4;
//     echo $CalcDay + $rem;
// }


// Task 6-Get the length of this sentence
// $str = "Hello World PHP";
// echo strlen($str);


// Task 7-Get the length of this sentence without spaces
// $str = "Hello World PHP";
// echo strlen(str_replace(" ", "", $str));

/**     Anthor Solution            **/
// $WhiteSpaces = 0;
// for ($i = 0; $i < strlen($str); $i++) {
//     if ($str[$i] !== " ") {
//         $WhiteSpaces++;
//     }
// }
// echo $WhiteSpaces;



// Task 8-Get the number of words in this sentence
// $str = "Hello World PHP";
// $WhiteSpaces = 0;
// for ($i = 0; $i < strlen($str); $i++) {
//     if ($str[$i] == " ") {
//         $WhiteSpaces++;
//     }
// }
// echo $WhiteSpaces;



// Task 9-Check if this word (by) exists in the string or not
// $str = "Hello World Using PHP";
// if (strpos($str, "By") !== false) {
//     echo "'By' Is Found in String";
// } else {
//     echo "'By' Is NOT Found in String";
// }



// Task 10-Get the word (EraaSoft) from the string and print it
// $str = "Hello EraaSoft in Course Backend";




// Task 11
// $str = "Hello World By Using PHP";
// echo str_replace("By", "\n", $str);



// Task 12
// $string_one = "Eraa";
// $string_two = "Soft";
// $Full_string = $string_one . $string_two;
// echo $Full_string;



// Task 13
// $EraaSoft = "EraaSoft";
// $string_one = "Eraa";
// $string_two = "Soft";
// $Full_string = $string_one . $string_two;
// echo strcmp($EraaSoft, $Full_string);


// Task 14 Sample string: 'ErraSoft' Expected Output: Er/ra/So/ft
// $EraaSoft = "EraaSoft";
// echo chunk_split($ErraSoft, 2, " /");