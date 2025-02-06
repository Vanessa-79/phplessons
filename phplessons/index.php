<?php
  echo 'hello Vanie';

  //singline comment

  /* 
    Multiline comment
    This is a multi-line comment.
  */

  echo 'It is a cat';

//   variables
// varibales start with a dollar sign $ e.g
$name = 'Php beginner';
echo $name;
$name = 'Variable syntax';
echo $name;


//data types
$integer = 10;
$float = 10.5;
$string = 'Hello World';
$boolean = true;
$array = array(1, 2, 3);
$object = (object)['name' => 'John Doe'];


//operators

//single equals operator
//  trying to assihn a varibale with a value


//arithmentic operator
// addition of a variable with the folowingvalue
$sum = $integer + $float;

//subtraction of a variable with the folowing value
$difference = $integer - $float;

//assignment operator
// assign a varibale with a certain value
$integer += 10;

//comparison operator
// double equal to sign is used as a comaprion between to variables 
$equal = $integer == $float;

//logical operator
// 

$sum = $integer + $float;
$difference = $integer - $float;
$product = $integer * $float;
$division = $integer / $float;
$modulo = $integer % $float;
$increment = $integer++;


//conditional statements
//allows you to create conditional statements using if , else if and else
$num =90;
if($num > 50) {
  echo 'number is greater';
} elseif($num == 50) {
  echo 'number is equal';
} else {
  echo 'number is less';
}


//loops
//for loop
for ($i=0; $i < 10; $i++) { 
    echo " Iteration variable $i <br>";
}


//foreach loop
$numbers = array(1, 2, 3, 4, 5);
//iterate every number in the array
foreach ($numbers as $num) {
    echo "Number: $num <br>";
}


//functions
//used to group related code into reusable blocks
function greetings($name) {
    echo "Hello $name! <br>";
}
greetings('Vania');
greetings('How are you');

//passing arguments by value and by reference

?>
