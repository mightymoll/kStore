<?php

// check user is logged in
require_once('security.php');

/* get user-entered info from form on 'createProduct' page
 * for testing, get all in array :  var_dump($_POST) */

$name = $_POST["name"];
$desc = $_POST["description"];
$price = $_POST["price"];
$qty = $_POST["quantity"];

echo ini_get('display_errors');

// will return file name of photo file uploaded
$photoFile = $_FILES["photo"]["name"];
// recuperer l'image w/temporary file location & move to 'images' folder
$tempFile = $_FILES["photo"]["tmp_name"];
move_uploaded_file($tempFile, "./images/products/" . $photoFile);

// establish connection with DB
require_once('connection.php');

/* prepare the SQL request :
 * use ? as measure of security (must be same # of '?' as attributes)
 * attributes/values after table name must match those in DB table 
*/
$ps = $pdo->prepare("INSERT INTO products(p_name, p_desc, p_price, p_quantity, p_image) VALUES(?,?,?,?,?);");

// user-entered data to pass as function params (will be read in-order)
$params = array($name, $desc, $price, $qty, $photoFile);

// will insert $params values into products table
$ps->execute($params);


// alert data is sent to database
// TO DO: redirect to products page
success_alert("enregistré avec succès !");

function success_alert($msg)
{
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
