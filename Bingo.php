<?php
/**
 * Created by PhpStorm.
 * User: alumno
 * Date: 18/11/15
 * Time: 13:09
 */
$num = 0;
echo "<table border='1'>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 8; $j++){
        $num=($j*10)+$i;
        if($num==0) {
            echo"<td></td>";
        }else {
            if($i==100 and $num<90) {
                echo"<td></td>";
            }else {
                if($num<=90) echo"<td>".$num."</td>";
                else echo"<td></td>";
            }
        }

    }
    echo "</tr>";
}
echo "</table>";
?>

