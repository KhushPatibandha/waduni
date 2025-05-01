<?php
function first($str) {
    for ($i=0; $i < strlen($str); $i++) { 
        if(ord($str[$i]) < 97 || ord($str[$i]) > 122) {
            echo "false\n";
            return;
        }
    }
    echo "true\n";
}

first("khush");
first("khUsh");
?>
