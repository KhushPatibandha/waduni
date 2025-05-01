<?php
$num1 = 21;
$num2 = 20;
if ($num1 < 10 || $num1 > 99) {
    echo "Error: num1 is not a two-digit number.";
    return;
}
if ($num2 < 10 || $num2 > 99) {
    echo "Error: num2 is not a two-digit number.";
    return;
}
$n11 = $num1 % 10;
$n21 = $num2 % 10;
$num1 = (int) ($num1 / 10);
$num2 = (int) ($num2 / 10);
if($num1 == $num2 || $num1 == $n21 || $num2 == $n11 || $n11 == $n21) {
    echo "true";
    return;
}
echo "false";
?>
