<?php 

include("connection.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];


$sql = "INSERT INTO login (nome, email, senha, data_nasc, cpf) 
VALUES ('$nome', '$email', '$senha', '$data_nasc', '$cpf')";

if($conn->query($sql) === TRUE){
    echo "Usuario cadastrado com sucesso!";
} 

else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
