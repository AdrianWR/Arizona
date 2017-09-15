<?php
  session_start();
?>

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
        <li><a href="./cadastro.php">Cadastro</a></li>
    </ul>
    <div id="nav-login">
      <form  method="POST" action="include/login.inc.php">
        <input type="hidden" name="current_location" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
        <input type="text" name="email" placeholder="E-Mail">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit" name="submit" value="Login">
      </form>

      <?php
        $login_message = $_GET['login'];
        if (isset($login_message)) {
          echo '<h2 id="nav-login-error">';
          switch ($login_message) {
            case 'empty':
              echo "Há campos não informados no sistema de <i>login</i>.";
              break;
            case 'error':
              echo "Falha na autenticação.";
              break;
            case 'success':
              echo "Obrigado por logar, ".$_SESSION[user][name]."!";
              break;
          }
          echo "</h2>";
        }
      ?>

    </div>

  </nav>

<body>
