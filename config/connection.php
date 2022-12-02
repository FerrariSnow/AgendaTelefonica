<?php

$host = "localhost";
$dbname = "agenda";
$user = "teste";
$pass = "Teste.123";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  // ativar o modo de erro
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  // erro na conexão
  $error = $e->getMessage();
  echo "Erro: $error";
}