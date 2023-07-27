<?php
include('cabecalho.php');
session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no Intratec!!<br>";
    
}
?>

        <h1>Bem-vindo a Intratec!!</h1>
    </body>
    </div>
</html>
