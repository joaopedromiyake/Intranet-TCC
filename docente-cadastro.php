<?php
include("conexao.php");
include("docente-banco.php");

$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$contato=$_POST['contato'];
$email=$_POST['email'];
$nascimento=$_POST['nascimento'];
$senha=$_POST['senha'];
$area=$_POST['area'];

insereDocente($conexao,$matricula,$nome,$contato,$email,$nascimento,$senha,$area);
header("Location:docente-lista.php");
?>


