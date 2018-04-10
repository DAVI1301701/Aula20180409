<?php
$km = isset($_GET["km"]) ? $_GET["km"] : "";
$kml = isset($_GET["kml"])   ? $_GET["kml" ]: "";    

$gasolina = 4.20;
$alcool = 3.20;

$totalG = ($km/$kml) * $gasolina;
$totalA = ($km/$kml) * $alcool;
$total = ($km/$kml);
$total1 = ($km/$kml);
echo "quantidade de dinheiro em gasolina: ".$totalG." Reais <br>O carro andou ".$total."  km<br>";
echo "quantidade de dinheiro em alcool: ".$totalA." Reais <br>O carro andou ".$total1."  km<br>";
?>