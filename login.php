<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <header class="mb-5">
    <!-- TO DO: create & import header -->
  </header>

  <!-- card class from bootstrap -->
  <div class="card w-75 mx-auto">
    <div class="card-header text-center">Connexion</div>
    <div class="card-body">
      <!-- form, treat info w/authentifier.php -->
      <form method="POST" action="auth.php">
        <div class="mb-3">
          <label class="form-label">Login</label>
          <input type="text" name="login" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary mt-3 mx-auto" value="Soumettre">
      </form>
    </div>
    <a href="createUser.php" class="mb-2" style="text-align:center">Nouveau client? créez un compte en cliquant ici</a>
  </div>

  <footer>
    <!-- TO DO: create & import footer -->
  </footer>
</body>

</html>