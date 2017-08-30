<?php

$signup_statement = $conn->prepare("INSERT INTO users (name,email) VALUES (:name,:email)");
$signup_statement->bindParam(':name', $name);
$signup_statement->bindParam(':email', $email);

if (isset($_POST['submit'])) {
  include_once 'connection.php';  // Connection to database with PDO
  // Prepared Statement for SignUp with PDO
  $signup_statement = $conn->prepare("INSERT INTO users (name,email) VALUES (:name,:email)");
  $signup_statement->bindParam(':name', $name);
  $signup_statement->bindParam(':email', $email);
  //$signup_statement->bindParam(':phone', $phone);
  //$signup_statement->bindParam(':branch_line', $branch_line);
  /*
  // Error Handlers
  // Check for empty fields
  if (empty($name) || empty($email)) {
    header("Location: ../index.php?signup=empty");
    exit();
  } else {
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../index.php?signup=invalidmail")
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE name = '$name';";
      $result = $conn->query($sql);
      $resultCheck = $result->rowCount();
      if ($resultCheck > 0) {
        header("Location: ../index.php?signup=invalidname");
        exit();
      } else {
        // Hashing the password
        // $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);
        // Insert the user in the database
        */$signup_statement->execute();
        echo "New records created successfully";
        //header("Location: ./test.html");
        exit();/*
      }
    }
  }
*/
}  else {
  header("Location: ./test.php");
  exit();
}
