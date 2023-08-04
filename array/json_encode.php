<?php
$pessoas= array();

array_push($pessoas, array
(   'nome' => 'João',));

array_push($pessoas, array
(   'nome' => 'Fabio',));

///echo ($pessoas[1]['nome']);

echo json_encode($pessoas);
?>