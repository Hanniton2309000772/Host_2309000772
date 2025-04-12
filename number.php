<?php
// Basic arithmetic operations
$num1 = 10;
$num2 = 3;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$remainder = $num1 % $num2;

// Rounding numbers
$floatNum = 5.6789;
$rounded = round($floatNum, 2); // Round to 2 decimal places
$ceil = ceil($floatNum); // Round up
$floor = floor($floatNum); // Round down

// Formatting numbers
$formatted = number_format($floatNum, 2); // Format with 2 decimal places

// Print results
echo "Sum: $sum <br>";
echo "Difference: $difference <br>";
echo "Product: $product <br>";
echo "Quotient: $quotient <br>";
echo "Remainder: $remainder <br>";
echo "Rounded: $rounded <br>";
echo "Ceil: $ceil <br>";
echo "Floor: $floor <br>";
echo "Formatted: $formatted <br>";
?>