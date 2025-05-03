<?php
function first($num) {
    if($num <= 50) {
        echo abs(50 - $num) . "\n";
    } else {
        echo abs(50 - $num) * 3 . "\n";
    }
}

function second($str, $i) {
    echo substr($str, 0, $i) . substr($str, $i + 1) . "\n";
}

function third($num) {
    $last = $num % 10;
    $digits = (int) (log10($num));
    $first = (int) ($num / pow(10, $digits));
    $res = $last * pow(10, $digits);
    $res += $num % pow(10, $digits);
    $res -= $last;
    $res += $first;
    echo $res . "\n";
}

function fourth($str, $char, $i) {
    echo substr($str, 0, $i) . $char . substr($str, $i) . "\n";
}

first(20);
first(51);

second("khush", 4);
second("khush", 1);
second("khush", 2);
second("khush", 0);

third(100);
third(12345);

fourth("khush", 'u', 3);
?>
