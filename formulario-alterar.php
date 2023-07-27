<?php
include("conexao.php");
include("docente-banco.php");
include("cabecalho.php");
$matricula=$_POST['matricula'];
$docente= buscaDocente($conexao, $matricula);

session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no Intratec!!<br>";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Produtos</h1>
        <form name="f1" method="post" action="docente-alterar.php">
            <p> Matricula:<input type="text" name="matricula" value="<?=$docente['matricula']?>"class="form-control"></p>
            <p> Nome:<input type="text" name="nome" value="<?=$docente['nome']?> "class="form-control"></p>
            <p>Contato:<input type="text" name="contato" value="<?=$docente['contato']?>"class="form-control"></p>
            <p>Nascimento:<input type="date" name="nascimento" value="<?=$docente['nascimento']?>"class="form-control"></p>
            <p>Email:<input type="text" name="email" value="<?=$docente['email']?>"class="form-control"></p>
            <p>Senha:<input type="password" name="senha" value="<?=$docente['senha']?>"class="form-control"></p>
            <p>Area:<input type="text" name="area" value="<?=$docente['area']?>"class="form-control"></p>
            <p><input type="submit" name="enviar" value="Alterar"></p>
        </form>
            
    </body>
</html>
