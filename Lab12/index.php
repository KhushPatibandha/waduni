<?php
echo "<div style='border:5px double black; display:inline-block;'>";
echo "<table width='270px' cellspacing='0' cellpadding='0' border='1' style='border-collapse: collapse;'>";
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $color = ($row + $col) % 2 == 0 ? '#ffffff' : '#000000';
        echo "<td style='width:30px; height:30px; background-color:$color;'></td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplication Table</title>
    </head>
    <body>
        <table cellpadding="3px" cellspacing="0px">
            <?php
            for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            for($j=1; $j<=5;$j++){
echo "<td>$i * $j = ".($j*$i)."</td>";
}
echo "</tr>";
}
?>
</table>
</body>
</html>

