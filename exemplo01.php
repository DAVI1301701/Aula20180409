<?php
// exemplo para imprimir na tela os numeros.
echo"Digite dois números";
echo "<br>";

$numero1 = $_GET["PRIMEIRO"];
$numero2 = $_GET["SEGUNDO"];

echo "Primeiro numero:  ".$numero1."<br>";
echo "Segundo numero:  ".$numero2."<br><br>";


?>

<form method="get">

 PRIMEIRO: <input type="int" name="PRIMEIRO" value="<?=$numero1?>" ><br><br>
 SEGUNDO: <input type="int" name="SEGUNDO" value="<?=$numero2?>" ><br><br>
  <input type="submit" name="submit" value="enviar">
  </form>