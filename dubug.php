<?php

// Một hàm đơn giản để tính tổng
function sum($a, $b) {
    return $a + $b;
}

// Gọi hàm sum và in kết quả
$number1 = 5;
$number2 = 10;

$result = sum($number1, $number2);

echo "The result of {$number1} + {$number2} is: " . $result;

?>