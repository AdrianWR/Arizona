<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'cem';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    // Set the PDO error mode to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Succesfully to MySQL!";
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $conn = null;
