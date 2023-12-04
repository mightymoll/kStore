<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Nouveau compte</title>
</head>

<body>
  <header class="mb-5">
    <?php require_once('header.php'); ?>
  </header>

  <!-- card class from bootstrap -->
  <div class="card w-75 mx-auto">
    <div class="card-header text-center">Nouveau compte</div>
    <div class="card-body">
      <!-- form, treat info w/saveUser.php -->
      <form method="POST" action="saveUser.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Nom</label>
          <input type="text" name="lastName" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Prenom</label>
          <input type="text" name="firstName" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Nom d'utilisateur</label>
          <input type="text" name="login" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary mt-3 mx-auto" value="S'inscrire">
      </form>
    </div>
  </div>
  <footer>
    <!-- TO DO: create & import footer -->
  </footer>
</body>

</html>