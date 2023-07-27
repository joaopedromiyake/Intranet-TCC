
        <?php
       include('conexao.php');
       include('login-banco.php');  
       
       if($_POST){
           $matricula=$_POST["matricula"];
           $senha=$_POST["senha"];
           if(buscaDocente($conexao,$matricula,$senha)){
               session_start();
               $_SESSION['matricula']=$matricula;
               $_SESSION['log']='ativo';
             header("Location:indexdocente.php");
             die();
           }else{
           echo "Usuário ou senha inválida<br>";
           echo "<a href='acessodocente.php'>Voltar para a tela de login</a>"; 
           }
       }
        ?>

