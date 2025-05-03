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
