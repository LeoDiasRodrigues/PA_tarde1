<?php 

include("my_conecction.php");

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$password')";

if($conn->query($sql) === TRUE){
    echo "Usuario cadastrado com sucesso!";
} 

else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();