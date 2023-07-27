
<?php
include("cabecalho.php");
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Docente</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<div class="container">  
    <h1>Acesso Restrito Docente</h1>
    <form name="flogin" method="post" action="logindocente.php">
         <div class="form-group">
        <p><label>Matricula</label><br><input type="text" name="matricula" class="form-control"></p>
        <p><label>Senha</label><br><input type="password" name="senha" class="form-control"></p>
        <p><input type="submit" name="enviar" value="Enviar" class="btn-success btn-lg"></p>
         </div>
    </form>
    <a href="esqueciasenha.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Redefinir a senha</a>
    </div>
</body>
</html>