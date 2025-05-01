<?php
$n = 1234;
$res = 0;
while($n > 0) {
    $res = $res * 10 + $n % 10;
    $n = (int) ($n / 10);
}
echo $res;
?>
