<?php 
switch ($_REQUEST["acao"]) {
  case 'cadastar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];
    
    $sql = "INSERT INTO usuarios (nome,email,senha,data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
    
    $res = $conn -> query($sql);
   break;
  
  case 'editar':
    # code...
    break;

    case 'excluir':
    # code...
    break;
}
?>