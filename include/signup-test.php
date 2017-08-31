<?php

$name = $_POST["name"];
$email = $_POST["email"];

echo $name;

/*
include_once 'connection.php';
$stmt = $conn->prepare("INSERT INTO users(name,email) VALUES (:name,:email)");
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);
$stmt->execute();
var_dump($name);
if(isset($conn)) {
  echo "New records created successfully";
}
*/

?>
