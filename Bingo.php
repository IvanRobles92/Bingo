<html>
<head>
    <title>BINGO!</title>
</head>
<body>
<?php
session_start();
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
            if($i==10 and $num<90) {
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

function galeatorios(){
    //$numeros;=array();
    $numeros=rand(1,90);
    //for($i=1;$i<$n;$i++){
    // $numeros[$i]=rand(1,49);
    /*for($j=0;$j<=$i-1;$j++){
        if($numeros[$j]==$numeros[$i]){
            $i--;
            break;
        }
    }*/
    //}
    return $numeros;

}

?>
    <form action="Bingo.php" method="post">
        <input type="submit" name="genera" value="Obtener numero"/>
        <input type="submit" name="nuevo" value="NuevoJuego"/>
    </form>
</body>
</html>
<?php
if(isset($_POST["genera"]))
{
    $_SESSION["numero"]=galeatorios();
    echo $_SESSION["numero"];
}

if(isset($_POST["nuevo"]))
{
session_destroy();
}

?>

