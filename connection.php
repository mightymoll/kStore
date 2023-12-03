<?php

/* Establish connection to database */
try {
  // server, port #, database name for pdo object
  $connect = "mysql:host=localhost;port=8889;dbname=ecommerce";

  // new PHP Data Object with connection params
  $pdo = new PDO($connect, 'root', 'root');
}
// throw error message if connection is not a success
catch (PDOException $err) {
  // getMessage() function used from PDOException class, returns $err attribute value
  $msg = "ERROR : " . $err->getMessage();
  // die = exit script after error message is displayed
  die($msg);
}
