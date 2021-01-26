<?php

// localhost
$servername = "localhost";
$dbName = "travel";
$username = "root";
$password = "";

//https://www.freemysqlhosting.net/account/
// $servername = "sql7.freemysqlhosting.net";
// $dbName = "sql7386840";
// $username = "sql7386840";
// $password = "pKJhSzNgMS";

//DB4free.net
// $servername = "db4free.net";
// $dbName = "travel_db";
// $username = "yhomi_ace";
// $password = "ace18081996";

// $servername = "us-cdbr-east-03.cleardb.com";
// $dbName = "heroku_3a51262e432d031";
// $username = "b9d0455bd85bdf";
// $password = "7568cb23";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>