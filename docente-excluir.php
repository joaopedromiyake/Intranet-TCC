<?php
include('conexao.php');
include('docente-banco.php');
$matricula=$_POST['matricula'];
excluirDocente($conexao,$matricula);
header("Location:docente-lista.php");
?>

