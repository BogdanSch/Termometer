<?php

$t = rand(-20, 20);

print "<table>";
for($i = 20; $i >= -20; $i--){
    $style = $i < $t ? "background: red;" : "background: yellow;";
    print "<tr> <td style=\"border: 1px solid #000;\">$i</td> <td style=\"border: 1px solid #000; width: 30px; $style\"></td> </tr>";
}
print "</table>";