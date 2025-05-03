<?php
for ($i=1; $i <= 30; $i++) { 
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "fivethree ";
    } else if($i % 3 == 0) {
        echo "three ";
    } else if($i % 5 == 0) {
        echo "five ";
    } else {
        echo $i . " ";
    }
}

$num1 = 21;
$num2 = 20;
if ($num1 < 10 || $num1 > 99) {
    echo "Error: num1 is not a two-digit number.";
}
if ($num2 < 10 || $num2 > 99) {
    echo "Error: num2 is not a two-digit number.";
}
$n11 = $num1 % 10;
$n21 = $num2 % 10;
$num1 = (int) ($num1 / 10);
$num2 = (int) ($num2 / 10);
if($num1 == $num2 || $num1 == $n21 || $num2 == $n11 || $n11 == $n21) {
    echo "true";
}
echo "false";


/* $n = 1221; */
$n = 122;
$temp = $n;
$res = 0;
while($temp > 0) {
    $res = $res * 10 + $temp % 10;
    $temp = (int)($temp / 10);
}
if ($res == $n) {
    echo "true";
} else {
    echo "false";
}

$n = 1234;
$res = 0;
while($n > 0) {
    $res = $res * 10 + $n % 10;
    $n = (int) ($n / 10);
}
echo $res;

function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
$primes = [];
for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        $primes[] = $i;
    }
}
echo implode(", ", $primes);

$a = 13;
$b = 14;
$c = $a + $b;
$res = 0;
while($c > 0) {
    $res = $res * 10 + $c % 10;
    $c = (int) ($c / 10);
}
echo $res;
?>
