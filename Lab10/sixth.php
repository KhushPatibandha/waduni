<?php
$a = 13;
$b = 14;
$c = $a + $b;
$res = 0;
while($c > 0) {
    $res = $res * 10 + $c % 10;
    $c = (int) ($c / 10);
}
echo $res;
?>
