<?php 
  include_once("url.php");
  include_once("process.php");

  //limpa a mensagem de sessão
  if(isset($_SESSION["msg"])) {
    $_SESSION["msg"] = '';
    $printMsg = $_SESSION["msg"];
  }

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= $BASE_URL ?>img/favicon.svg" type="image/x-icon">
  <title>Agenda de Contatos</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script> 
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
  <style>
  <?php include "css/styles.css"?>
  </style>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class ="navbar-brand" href="<?= $BASE_URL ?>index.php">
      <img src="<?= $BASE_URL ?>img/logo.png" alt="Agenda">
    </a>

    <div class="navbar-nav">
      <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
      <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Criar Contato</a>
    </div>
  </nav>
</header>