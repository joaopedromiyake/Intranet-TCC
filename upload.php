<?php
include('conexao.php');
$msg=false;
if(isset($_FILES['arquivo'])){
   $extensao= strtolower(substr($_FILES['arquivo']['name'],-4));
   $novo_nome=md5(time()) . $extensao;
   $diretorio="localhost/upload/";
   move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);
   $sql="insert into arquivo(codigo,arquivo,data) values(null,'$novo_nome',NOW())";
  if(mysqli_query($conexao,$sql)){
      $msg="arquivo enviado com sucesso!!";
  }
   else{
      $msg="arquivo não foi enviado!!"; 
   }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Upload de imagens</h1>
        <?php if($msg !=false) echo "<p> $msg </p>";?>
        <form action="upload.php" method=post" enctype="multipart/form-data">
            Arquivo:<input type="file" required name="arquivo">
            <input type="submit" value="salvar">
        </form>
    </body>
</html>
