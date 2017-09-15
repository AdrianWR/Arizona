<?php

  session_start();  // New login being made

  if (!isset($_POST["submit"])) {
    echo 'banana';
    header("Location: ../index.php"); // Access via POST method only
    exit();

  } else {
    include_once "connection.php";  // Database Connection
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Error Treatment

    // Definition of Last Header
    $ancient_url = $_POST['current_location'];
    $ancient_url = strtok($ancient_url, '?');   // Remove GET parameters
    $headerFail = "Location: ".$ancient_url."?login=";  // Location shortcut for errors

    // Missing Fields
    if (empty($email) || empty($password)) {
      header($headerFail."empty");
      exit();
     } else {

      // Check for User Existence
      $sql = $conn->prepare("SELECT * FROM users WHERE email = :email");  // Create Prepared Statement
      $sql->bindParam(':email', $email);
      $sql->execute();
      if ($sql->rowCount() == 0) {
        header($headerFail."error");
        exit();
      } else {

        // Password Validation
        $result = $sql->fetch(PDO::FETCH_ASSOC);  // Creates an assoc array with column-row data
        $sql = null;
        $passwordCheck = password_verify($password, $result[password]);
        if (!$passwordCheck) { // Password doesn't match
          $result = null;
          header($headerFail."error");
          exit();
        } elseif ($passwordCheck == true) {

          // Log in
          $_SESSION[user] = $result;  // Inicialização dos dados de sessão
          header($headerFail.'success');
          exit();
        }

      }

     }
  }
