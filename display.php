<?php
// initialize variables
// set sum to 0
$sum = 0;
// get value of first integer by a post method
$numOne = intval($_POST["int-one"]);
// get value of second integer by a post method
$numTwo = intval($_POST["int-two"]);
// calculate the product of the first and second integer by using a loop
for ($counter = 1;$counter <= $numTwo;$counter++)
{
    $sum = $sum + $numOne;
}
// if the first or second integer is less than 0 (negative), than subtract as the product should be negative
if ($numOne < 0 || $numTwo < 0)
{
    for ($counter = - 1;$counter >= $numTwo;$counter--)
    {
        $sum = $sum - $numOne;
    }
}
// echo to display the result (product of integers) to the user
echo $sum;

?>