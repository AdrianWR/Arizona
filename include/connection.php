<?php

  $DBservername = 'localhost';
  $DBusername = 'root';
  $DBpassword = '';
  $DBname = 'cem';

  try {
    // Declaration of the new MySQL connection
    $conn = new PDO("mysql:host=$DBservername;dbname=$DBname",$DBusername, $DBpassword);
    // Set the PDO error mode to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Succesfully to MySQL!";
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  // $conn = null;
