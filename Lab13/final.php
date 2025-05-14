<?php
function first($str) {
    for ($i=0; $i < strlen($str); $i++) { 
        if(ord($str[$i]) < 97 || ord($str[$i]) > 122) {
            echo "false\n";
            return;
        }
    }
    echo "true\n";
}

function second($str) {
    $l = 0;
    $r = strlen($str) - 1;
    while($l < $r) {
        if($str[$l] != $str[$r]) {
            echo "false\n";
            return;
        }
        $l++;
        $r--;
    }
    echo "true\n";
}

function third($num) {
    $res = 0;
    while ((int)($num / 10) != 0){
        while($num > 0) {
            $res += $num % 10;
            $num = (int) ($num / 10);
        }
        $num = $res;
        $res = 0;
    }
    echo $num . " ";
}

first("khush");
first("khUsh");

second("jalaj");
second("khush");

third(59);
third(48);
?>
