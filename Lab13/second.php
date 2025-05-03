<?php
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

second("jalaj");
second("khush");
?>
