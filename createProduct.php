<?php

// checks that user is logged in and has a role of 'ADMIN'
require_once('security.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Ajouter Produit</title>
</head>

<body>
  <header class="mb-5">
    <!-- TO DO: create & import header -->
  </header>

  <!-- card class from bootstrap -->
  <div class="card w-75 mx-auto">
    <div class="card-header text-center">Nouveau Produit</div>
    <div class="card-body">
      <!-- form -->
      <form method="POST" action="saveProduct.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Nom de produit</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Prix</label>
          <input type="number" name="price" step="0.01" value="0.00" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Quantité</label>
          <input type="number" name="quantity" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" name="photo" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="ajouter produit">
      </form>
    </div>
  </div>
</body>
<footer>
  <!-- TO DO: create & import footer -->
</footer>

</html>