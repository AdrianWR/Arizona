<?php

if (isset($_POST['submit'])) {
  include_once 'connection.php';  // Connection to database with PDO
  // Prepared Statement for SignUp with PDO
  $signup_statement = $conn->prepare("INSERT INTO users (name,email,phone,branch_line VALUES (:name,:email,:phone,:branch_line)");
  $signup_statement->bindParam(':name', $name);
  $signup_statement->bindParam(':email', $email);
  $signup_statement->bindParam(':phone', $phone);
  $signup_statement->bindParam(':branch_line', $branch_line);

  $user = $_POST['user'];
}  else {
  header("Location: ../");
  exit();
}
