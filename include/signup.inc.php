<?php

if (isset($_POST['submit'])) {
  // Sign Up Variables from POST
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  // Connection to database
  include_once 'connection.php';
  // Error Handlers
  // Check for empty fields
  if (empty($name) || empty($email) || empty($password)) {
    header("Location: ../index.php?signup=empty");
    exit();
  } else {
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../index.php?signup=invalidmail");
      exit();
    } else {
      // Check if there's another user with same name
      $sql = "SELECT * FROM users WHERE name = '$name';";
      $result = $conn->query($sql);
      $resultCheck = $result->rowCount();
      if ($resultCheck > 0) {
        header("Location: ../index.php?signup=invalidname");
        exit();
      } else {
        echo "Tudo certo";
        // Insert the user in the database
        // Hashing the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Prepared Statement for SignUp with PDO
        $signup_statement = $conn->prepare("INSERT INTO users (name,email,password) VALUES (:name,:email,:password)");
        $signup_statement->bindParam(':name', $name);
        $signup_statement->bindParam(':email', $email);
        $signup_statement->bindParam(':password', $hashedPassword);
        try {
          $signup_statement->execute();
          header("Location: ../index.php?signup=success");
        } catch(PDOException $e) {
          echo "Data not inserted " . $e->getMessage();
        }
        exit();
      }
    }
  }
}  else {
  // Protection from access to Include folder
  header("Location: ../index.php");
  exit();
}
