<?php
function second($arr) {
    $res = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $res ^= $arr[$i];
    }
    echo $res . "\n";
}

second(array(5, 3, 4, 3, 4));
?>
