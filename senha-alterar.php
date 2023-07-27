<?php
include("conexao.php");
include("login-banco.php");
$matricula=$_POST['matricula'];
$senha=$_POST['senha'];

alteraSenha($conexao,$matricula,$senha);
header("Location:acessodocente.php");
?>
