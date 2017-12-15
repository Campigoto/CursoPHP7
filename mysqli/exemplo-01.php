<?php

$conn = new mysqli("localhost","root","root","dbphp7");

if ($conn->connect_error) {

  echo "Erro: " . $conn->connect_error;
  exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?, ?)");

$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass  = "123456";

$stmt->execute();
 ?>
