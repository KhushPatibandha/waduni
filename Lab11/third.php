<?php
function third($num) {
    $res = 0;
    do {
        while($num > 0) {
            $res += $num % 10;
            $num = (int) ($num / 10);
        }
        $num = $res;
        $res = 0;
    } while ((int)($num / 10) != 0);
    echo $num . " ";
}

third(59);
third(48);
?>
