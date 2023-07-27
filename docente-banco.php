<?php

function insereDocente($conexao,$matricula,$nome,$contato,$email,$nascimento,$senha,$area){
$sql="insert into docente(matricula,nome,contato,email,nascimento,senha,area) values('$matricula','$nome','$contato','$email','$nascimento','$senha','$area')";
return mysqli_query($conexao,$sql);
}

function listaDocentes($conexao){
$docentes=array();
$sql="select * from docente";
$resultado=mysqli_query($conexao,$sql);

while($docente= mysqli_fetch_assoc($resultado)){
   array_push($docentes,$docente);
}
return $docentes;
}//fim lista produto


function excluirDocente($conexao,$matricula){
    $query="delete from docente where matricula=$matricula";
    return mysqli_query($conexao,$query);
}

function alteraDocente($conexao,$matricula,$nome,$contato,$email,$nascimento,$senha,$area){
$query="update docente set matricula='$matricula',nome='$nome',contato='$contato',email='$email',nascimento='$nascimento',senha='$senha',area='$area' where matricula='$matricula'";
return mysqli_query($conexao,$query);
}
function buscaDocente($conexao,$matricula){
   $query="select * from docente where matricula='$matricula'";
   $resultado=mysqli_query($conexao,$query);
   return mysqli_fetch_assoc($resultado);
}
?>
