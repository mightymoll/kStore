<!-- recuperate list of students -->
<?php

session_start();

// etablir la connextion au base des donnees
require_once('connection.php');

// prepare statement to 'get' student data below
$ps = $pdo->prepare('SELECT * FROM products');
// use predefined method to execute the request
$ps->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
  <title>kStore</title>

</head>

<body>
  <header class="mb-5">
    <!-- TO DO: create & import header -->
  </header>
  <section>
    <h2>Products</h2>
    <div class="container-fluid mx-auto">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- get data from database
          use curly brackets to create loop (card for each product) -->
        <?php while ($product = $ps->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <!-- image with function to determine source, if not found use placeholder -->
              <?php
              if ($product['p_image'] == "") {
                echo "<img class='card-img-top' src='./images/placeholder.png' alt='no photo' />";
              } else {
                echo "<img class='card-img-top' src='./images/products/" . $product["p_image"] . "' alt=" . $product['p_name'] . " />";
              } ?>
              <div class="card-body">
                <div class="card-title">
                  <h5><?php echo $product["p_name"]; ?></h5>
                </div>
                <p class="card-text"><?php echo $product["p_desc"]; ?></p>
                <h6><?php echo "prix : " . $product["p_price"] . "€"; ?></h6>

                <!-- TO DO -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- close loop -->
        <?php } ?>
      </div>
    </div>
  </section>
  <footer>
    <!-- TO DO: create & import footer -->
  </footer>
</body>

</html>