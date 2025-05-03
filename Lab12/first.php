<?php
for ($i=1; $i <= 30; $i++) { 
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "fivethree ";
    } else if($i % 3 == 0) {
        echo "three ";
    } else if($i % 5 == 0) {
        echo "five ";
    } else {
        echo $i . " ";
    }
}
?>
