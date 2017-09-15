<!DOCTYPE html5>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine|Encode+Sans">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Schedule</title>
</head>

<body>
  <h1>Schedule System</h1>
  <nav id="nav-bar">
    <ul>
        <li><a href="./index.php">Início</a></li>
        <li><a href="./index.php">Produtos</a></li>
        <li><a href="./index.php">Sobre</a></li>
        <li><a href="./index.php?signup">Cadastro</a></li>
    </ul>
    <form id="nav-login" method="POST" action="include/login.inc.php">
      <?php $current_location = $_SERVER['REQUEST_URI']; ?>
      <input type="hidden" name="current_location" value="<?php $current_location; ?>" />
      <input type="text" name="email" placeholder="E-Mail">
      <input type="password" name="password" placeholder="Senha">
      <input type="submit" name="submit" value="Login">
    </form>
  </nav>

<body>
