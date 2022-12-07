<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if(!empty($data)) {
  print_r($data);
  // CRIAR CONTATO
  if($data["type"] === "create") {

    $name = $data["name"];
    $phone = $data["phone"];
    $email = $data["email"];
    $observation = $data["observation"];

    $query = "INSERT INTO contacts (name, phone, email, observation) VALUES (:name, :phone, :email, :observation)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":observation", $observation);


    try {

      $stmt->execute();
      $printMsg = "Contato criado com sucesso.";
    
    } catch (PDOException $e) {
      // erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  }

  // REDIRECT HOME
  header("Location:" . $BASE_URL . "../index.php");

  // SELECTTS DE DADOS
} else {

  $id;

  if(!empty($_GET)) {
    $id = $_GET["id"];
  }
  
  if(!empty($id)) {
   $query = "SELECT * FROM contacts WHERE id = :id";
  
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $contact = $stmt->fetch();
  
  } else {
    // RETORNA TODOS OS CONTATOS
    $contacts = [];
  
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $contacts = $stmt->fetchAll();
  }
}

// FECHAR CONEXÃO VIA PDO

$conn = null;