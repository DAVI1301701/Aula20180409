<?php

echo"Digite dois números";
echo "<br>"; 
$n1 = $_GET["PRIMEIRO"];
$n2 = $_GET["SEGUNDO"];

echo "PRIMEIRO".$n1."<br>";
echo "SEGUNDO".$n2."<br>";
$div = "A divisão de n1 por n2 é =  ";
echo $div;
echo $n1/$n2; 

?>