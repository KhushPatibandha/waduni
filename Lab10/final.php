<?php
function first($str) {
    echo $str[0] . "". $str[1] ."-". $str[2] ."". $str[3] ."-". $str[4] ."". $str[5] . "\n";
}

function second($str) {
    if(strpos($str, "university")) {
        echo "true\n";
        return;
    } else {
        echo "false\n";
        return;
    }
}

function third($str) {
    $pos = 0;
    for ($i=0; $i < strlen($str); $i++) { 
        if($str[$i] == '@') {
            $pos = $i;
            break;
        }
    }
    echo substr($str, 0, $pos) ."\n";
}

function fourth($str1, $str2) {
    for ($i=0; $i < strlen($str1); $i++) { 
        if($str1[$i] != $str2[$i]) {
            echo $i;
            return;
        }
    }
}

first("180425");
second("this is adani university");
third("abc@php.com");
fourth("bed", "bad");
?>
