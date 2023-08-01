<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8" />
 <title>Calculo idade</title>
 </head>

 <body>

<form method="get">

Insira o ano de nascimento:<input type="text" name="ano" id="ano" >
<button type="submit" name="enviar" >CALCULAR</button>

</form>

<?php
$ano = $_GET['ano'];

$ano_atual = date("Y");
$idade =  $ano_atual - $ano;
echo "Sua idade é: " . $idade . " anos";

echo "<br>Voce já viveu: " . 365 * $idade . " dias";

echo "<br>Em 2025 você terá  " . 2025 - $ano . " anos";





?>

</body>
</html>