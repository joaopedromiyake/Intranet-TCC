<?php
include('conexao.php');
include('docente-banco.php');
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
        <div class="container">
        <h1 align="center">Lista de Docentes</h1>
        <table class="table table-active table-bordered table-striped">
  <?php
  $docentes=listaDocentes($conexao);
  foreach ($docentes as $docente):
   ?>
            <tr>
                <td><?=$docente['matricula']?></td>
                <td><?=$docente['nome']?></td>
                <td><?=$docente['contato']?></td>
                <td><?=$docente['email']?></td>
                <td><?=$docente['nascimento']?></td>
                <td><?=$docente['senha']?></td>
                <td><?=$docente['area']?></td>
                <td><form action="docente-excluir.php" method="post">
                    <input type="hidden" name="matricula" value="<?=$docente['matricula']?>">
                    <button class="btn-danger">Excluir</button>
                    </form>
                </td>
                
                 <td><form action="formulario-alterar.php" method="post">
                    <input type="hidden" name="matricula" value="<?=$docente['matricula']?>">
                    <button class="btn-primary">Alterar</button>
                   </form>
                </td>
            </tr>
 <?php
  endforeach;
 ?>     
        </table>
    
        </div>
    </body>
</html>
