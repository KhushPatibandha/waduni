<?php
function first($arr) {
    $avg = 0;
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    $avg = $sum / count($arr);

    echo "Average temp: " . $avg . "\n";

    sort($arr);
    echo "Lowest temp: " . $arr[0] . " " . $arr[1] . " " . $arr[2] . " " . $arr[3] . " " . $arr[4] . " " . $arr[5] . "\n";

    rsort($arr);
    echo "Highest temp: " . $arr[0] . " " . $arr[1] . " " . $arr[2] . " " . $arr[3] . " " . $arr[4] . " " . $arr[5];
}

first(array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73));
?>
