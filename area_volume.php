<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8" />
 <title>Calculo de area e volume de esfera </title>
 </head>

 <body>

<form method="get">

Insira o raio:<input type="text" name="raio" id="raio" >
<button type="submit" name="enviar" >CALCULAR</button>

</form>

<?php



if (isset($_GET['enviar'])){
    
    $raio = $_GET['raio'];
 $area = (4 * M_PI * pow ($raio,2));
 $volume = ((4 * M_PI * pow($raio,3))/3);

    echo "o valor de PI é: " . M_PI;
    echo  "<br><br><br>" ."Com um raio de " .$raio. " a AREA da esfera é igual a  " . $area ;
    echo  "<br><br><br>" ."Com um raio de " .$raio. " o VOLUME da esfera é igual a  " . $volume  ;
    
}

?>

</body>
</html>