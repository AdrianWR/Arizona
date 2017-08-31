<?php

  $DBservername = 'localhost';
  $DBusername = 'root';
  $DBpassword = '';
  $DBname = 'cem';

  try {
    // Declaration of the new MySQL connection
    $conn = new PDO("mysql:host=$DBservername;dbname=$DBname",$DBusername,
      $DBpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
    // Set the PDO error mode to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
  }

  // $conn = null;
