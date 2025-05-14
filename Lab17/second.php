<?php
function second($arr) {
    $longest = "";
    $shortest = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
    for($i = 0; $i < count($arr); $i++) {
        if(strlen($arr[$i]) > strlen($longest)) {
            $longest = $arr[$i];
        }
        if(strlen($arr[$i]) < strlen($shortest)) {
            $shortest = $arr[$i];
        }
    }
    echo "longest: " . $longest . ", shortest: " . $shortest;
}
second(array("abcd","abc","de","hjjj","g","wer"));
?>
