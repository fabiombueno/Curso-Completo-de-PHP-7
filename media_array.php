<?php
$notas = [10,9,10];
$media = ($notas[0] + $notas[1] + $notas[2])/3;

if ($media>=6){
    echo "Aprovado, média " . $media ;
}
else{
    echo "Reprovado, média ". $media;
}

?>