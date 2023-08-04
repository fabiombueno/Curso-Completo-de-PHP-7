<?php
$json = '[{"nome":"Joa\u0303o"},{"nome":"Fabio"}]';
$data = json_decode($json,true);
var_dump($data); 
?>
