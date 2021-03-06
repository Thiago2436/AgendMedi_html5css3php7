<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Form </title>
</head>
<body> 
<?php
$cpf =$_POST['CPF'];
$nome=$_POST['nome'];
$nomemed=$_POST['NomeMed'];
$esp=$_POST['EspecialidadeMed'];
$Conv=$_POST['Convenio'];
$Valor=$_POST['ValorCons'];
$Data=$_POST['date'];
$Hora=$_POST['hora'];
echo " Resumo da Consulta ";
echo "Nome : ".$nome."<br>";
echo " Cpf : ".$cpf."<br>";
echo " Nome do Medico : ".$nomemed."<br>";
echo " Especialidade : ".$esp."<br>"; 
echo " Convenio : ".$Conv."<br>";
echo " Valor da Consulta : ".$Valor."<br>";
echo " Data : ".$Data."<br>";
echo " Hora : ".$Hora."<br>";

?>
</body>
</html>