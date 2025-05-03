<?php
/* $n = 1221; */
$n = 122;
$temp = $n;
$res = 0;
while($temp > 0) {
    $res = $res * 10 + $temp % 10;
    $temp = (int)($temp / 10);
}
if ($res == $n) {
    echo "true";
    return;
} else {
    echo "false";
    return;
}
?>
