<?php
function first($arr) {
    $res = [];
    $sum = 0;
    $ptr = 0;
    for ($i=0; $i < count($arr); $i++) { 
        if($i - $ptr >= 3) {
            if($sum == 0) {
                echo $res[0] . " " . $res[1] . " " . $res[2] . "\n";
                return;
            }
            $sum -= $arr[$ptr];
            array_shift($res);
            $ptr++;
        }
        $sum += $arr[$i];
        $res[] = $arr[$i];
    }
    if($sum == 0) {
        echo $res[0] . " " . $res[1] . " " . $res[2] . "\n";
        return;
    }
    echo "false\n";
}

function second($arr) {
    $res = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $res ^= $arr[$i];
    }
    echo $res . "\n";
}

second(array(5, 3, 4, 3, 4));

first(array(-1, 1, 0, 2, 3));
first(array(2, 2, -6, 6, 0));
first(array(0, 0, 0));
?>
