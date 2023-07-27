

<?php
include("cabecalho.php");
session_start();
if($_SESSION['log']!="ativo"){
   session_destroy();
   header("Location:index.php");
}
else{
    echo "Olá, " . $_SESSION['usuario'] . " Você está logado no Intratec!!<br>";
    
}
?>



        <div class="container">
        <h1>Cadastro de Docentes teste</h1>
        <form name="f1" method="post" action="docente-cadastro.php">
            <div style="color: white;" class="form-group">
            <p> Matricula:<input type="text" name="matricula" class="form-control"></p>   
            <p> Nome:<input type="text" name="nome" class="form-control"></p>
            <p>Contato:<input type="text" name="contato" class="form-control"></p>
            <p>Nascimento:<input type="date" name="nascimento" class="form-control"></p>
            <p>Email:<input type="text" name="email" class="form-control"></p>
            <p>Senha:<input type="password" name="senha" class="form-control"></p>
            <p>Area:<input type="text" name="area" class="form-control"></p>
            <p><input type="submit" name="enviar" value="Enviar" class="btn-success"></p>
            </div>  
        </form>
        </div>     
    </body>
</html>
