<?php

/* get user-entered info from form on 'createUser' page
 * for testing, get all in array :  var_dump($_POST) */

$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$login = $_POST["login"];
// hash password with md5 for security
$pwd = md5($_POST["password"]);


// establish connection with DB
require_once('connection.php');
// prepare the SQL request, use ??? as measure of security **CASE SENSITIVE
$ps = $pdo->prepare("INSERT INTO users(login, pwd, name_first, name_last, email, role) VALUES(?,?,?,?,?,?)");

/* user-entered data to pass as function params
 * use 'CLIENT' as role for all users created this way
 * 'ADMIN' role can only be assigned in DB interface */
$params = array($login, $pwd, $firstName, $lastName, $email, 'CLIENT');

// use params in execution of the request to the server
$ps->execute($params);

// TEMPORARY : alert if user is created -> replace with redirect to product page
success_alert("user enregistré avec succès !");

function success_alert($msg)
{
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
