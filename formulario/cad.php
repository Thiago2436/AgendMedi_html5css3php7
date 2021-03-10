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
  echo " Nome : ".$nome."<br>";
  echo " Cpf : ".$cpf."<br>";
  echo " Nome do Medico : ".$nomemed."<br>";
  echo " Especialidade : ".$esp."<br>"; 
  echo " Convenio : ".$Conv."<br>";
  echo " Data : ".$Data."<br>";
  echo " Hora : ".$Hora."<br>";
  if($Conv == 'Unimed')    {
    
    $Desc = ($Valor/ 1.5);
    echo " Valor Com desconto Unimed 30% : R$ ".$Desc;
          }
    elseif($Conv == 'Prever'){
    $Desc = ($Valor / 2);
    echo " Valor com Desconto Prever 50% : R$ ".$Desc;
        }else{
         $Desc = $Valor;
         echo " Sem desconto Aplicado : R$ ".$Desc;
  } 

?>
<br>
<br>
<a href="index.html"> <h1>VOLTAR</h1> </a>
</body>
</html>