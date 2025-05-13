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
    $x = (string)$num;
    $x = $x[strlen($x) - 1] . ""  . substr($x, 1, strlen($x) - 2) ."". $x[0];
    echo (int)$x . "\n";
}

function fourth($str, $char, $i) {
    echo substr($str, 0, $i) . $char . substr($str, $i) . "\n";
}

function fifth($str, $target, $rep) {
    $idx = strpos($str, $target);
    echo substr($str, 0, $idx) . $rep . substr($str, $idx + strlen($target)) . "\n";
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

fifth("I dont like adani", "dont ", "")
?>
