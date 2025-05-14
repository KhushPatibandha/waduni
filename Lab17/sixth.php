<?php
function sixth($arr) {
    $p = 0;
    while($arr[$p] != 0) {
        $p++;
    }
    for($i = $p + 1; $i < count($arr); $i++) {
        if($arr[$i] != 0) {
            $arr[$p] = $arr[$i];
            $p++;
        }
    }
    while($p < count($arr)) {
        $arr[$p] = 0;
        $p++;
    }
    var_dump($arr);
}

sixth(array(0, 1, 0, 0, 2, 0, 3, 0, 4));
sixth(array(1, 0, 0, 2, 0, 3, 0, 4));
?>
