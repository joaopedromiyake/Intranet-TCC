<?php
include('conexao.php');

function buscaUsuario($conexao,$usuario,$senha){
$sql="select * from login where usuario='$usuario' and senha='$senha'";
$resultado= mysqli_query($conexao, $sql);
return mysqli_fetch_assoc($resultado);
}

function buscaDocente($conexao,$matricula,$senha){
    $sql="select * from docente where matricula='$matricula' and senha='$senha'";
    $resultado= mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
    }


    function alteraSenha($conexao,$matricula,$senha){
        $query="update docente set senha='$senha' where matricula='$matricula'";
        return mysqli_query($conexao,$query);
        }
?>

