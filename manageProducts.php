<!-- recuperate list of students -->
<?php

// check user is logged in
require_once('security.php');

// check if user has access
if (!($_SESSION["PROFILE"]["role"] == "ADMIN")) {
  header("location: products.php");
};

// etablir la connextion au base des donnees
require_once('connection.php');

// prepare statement to 'get' product data
$ps = $pdo->prepare('SELECT * FROM products;');
$ps->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Gestion Produit</title>
</head>

<body>
  <header class="mb-5">
    <?php require_once('header.php'); ?>
  </header>
  <!-- card class from bootstrap -->
  <div class="card w-75 mx-auto">
    <div class="card-header text-center">
      <h3 class="mb-3">Liste des produits</h3>
      <a href="createProduct.php" class="btn btn-warning mx-auto mb-3">ajouter un nouveau produit</a>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead class="p-5">
          <tr>
            <th>NOM</th>
            <th>DESCRIPTION</th>
            <th>PRIX</th>
            <th>QTY</th>
            <th>IMAGE</th>
          </tr>
        </thead>
        <tbody class="p-5">

          <?php while ($product = $ps->fetch()) { ?>
            <tr class="align-middle">
              <td><?php echo $product["p_name"]; ?></td>
              <td><?php echo $product["p_desc"]; ?></td>
              <td><?php echo $product["p_price"]; ?></td>
              <td><?php echo $product["p_quantity"]; ?></td>
              <td><?php
                  // show placeholder if p_image is empty
                  if ($product["p_image"] == "") {
                    echo "<img src='./images/placeholder.png' alt='no photo' height='100' width='100' />";
                  }
                  // show image if existing
                  else {
                    echo "<img src='./images/products/" . $product["p_image"] . "' alt=" . $product['p_name'] . " height='100' width='100' />";
                  } ?>
              </td>
              <!-- TO DO :  buttons to edit or delete produt from list -->
            </tr>
            <!-- close loop -->
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>