<?php
function fourth($arr) {
    sort($arr);
    $res = [];
    for($i = 1; $i <= $arr[count($arr) - 1]; $i++) {
        if(!in_array($i, $arr)) {
            array_push($res, $i);
        }
    }
    var_dump($res);
}

fourth(array(1, 4, 3, 6));
?>
