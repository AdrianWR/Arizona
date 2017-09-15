<?php

  if (!isset($_POST["submit"])) {
    header("Location: ../index.php");
    exit();
  } else {
    include_once "./connection.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Error Treatment
    // Missing Fields
    if (empty($email) || empty($password)) {
      echo $_SERVER["REQUEST_URI"];
      exit();
    } else {

    }
  }
