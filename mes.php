<?php
  $mes = [
  "Janeiro", "Fevereiro",
  "Março", "Abril",
  "Maio", "Junho",
  "Julho", "Agosto",
  "Setembro", "Outubro",
  "Novembro", "Dezembro"];

  $numMes = 12;

  if($numMes >=1 and $numMes <=12){
    echo $mes[$numMes - 1];
  }else{
    echo "Mês inválido";
  }
 ?>