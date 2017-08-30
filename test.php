<!DOCTYPE html5>

<html>


<head>
  <title>Success!</title>
  <meta charset="UTF-8">
</head>

<body>
  <h1>Usuário Cadastrado!</h1>


  <?php

  $name = "Aeronauta Barata"
  $email = "aeronauta.barata@gmail.com";

  echo $name." ".$email;
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

</body>

</html>
