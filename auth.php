<?php

// get user-entered info from 'login.php' form

$login = $_POST["login"];
// use MD5 hashing to securely store password
$pwd = md5($_POST["password"]);

// establish connection with DB
require_once('connection.php');
// prepare the SQL request, use ?? as measure of security
$ps = $pdo->prepare("SELECT * FROM users WHERE login=? AND pwd=?");
$params = array($login, $pwd);
$ps->execute($params);

// have to use array_unique because data is being duplicated for some reason??
$user = array_unique($ps->fetch());

// if user exists (is found in DB with SQL request) create session profile
if (isset($user)) {
  session_start();
  $_SESSION["PROFILE"] = $user;
  // for TESTING
  var_dump($user);
  // TO DO: redirect to product page
} else {
  header("location: login.php");
}
