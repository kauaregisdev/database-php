<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$data_nasc = $_POST["data_nascimento"];
$telefone = $_POST["telefone"];

require_once "conexao.php";
$sql = "INSERT INTO usuario (nome, email, data_nasc, telefone) VALUES (?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $data_nasc, $telefone);
if($stmt->execute()){
    echo "<br>Usuário cadastrado com sucesso!";
}else{
    echo "Erro: ".$stmt->error;
}
$stmt->close();
$con->close();

echo "<br>Nome: ".$nome;
echo "<br>Email: ".$email;
echo "<br>Data de Nascimento: ".$data_nasc;
echo "<br>Telefone: ".$telefone;
?>