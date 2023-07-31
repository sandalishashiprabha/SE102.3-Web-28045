<?php
$x = 6;
$y = 4;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$division = $x / $y;

echo "Sum: " . $sum . " ";
echo "Difference: " . $difference . " ";
echo "Product: " . $product . " ";
echo "Division: " . $division;
?>
<br>
<br>





<?php
// Using a for loop to display count from 5 to 15
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}
?>
<br>
<br>



<?php

function calculateElectricityBill($units) {
    if ($units <= 50) {
        $billAmount = $units * 3.50;
    } elseif ($units <= 100) {
        $billAmount = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $billAmount = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $billAmount = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    return $billAmount;
}

// Example:
$unitsConsumed = 120;
$bill = calculateElectricityBill($unitsConsumed);
echo "Electricity Bill for $unitsConsumed units: Rs. " . number_format($bill, 2);
?>
<br>
<br>



<?php
function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid number";
    }
}

// Example:
$number = 1; 
$dayOfWeek = getDayOfWeek($number);
echo "Day $number is $dayOfWeek";
?>
<br>
<br>



<?php
$fruits = array("Apple", "Banana", "Orange", "Grapes", "Mango");

// Use foreach loop to print each element of the array
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
?>
