<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dfbbfb">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="products.php">
      <img src="./images/Kakaofriends.png" alt="" height='60' class="d-inline-block align-text-middle me-2 rounded-circle">
      kStore
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <!-- only shown if 'ADMIN' logged in -->
        <li class="nav-item">
          <?php
          if (isset($_SESSION['PROFILE']) && $_SESSION['PROFILE']['role'] == 'ADMIN') {
            echo "<a class='nav-link' href='manageProducts.php'>Gestion Produit</a>";
          } ?>
        </li>
        <!-- button for login/logout -->
        <li class="nav-item">
          <?php
          // no session profile? show 'Login'
          if (!isset($_SESSION['PROFILE'])) { ?>
            <a href='login.php' class='btn btn-primary ms-5'>Login 🌼</a>
          <?php }
          // if session has a profile and role is admin, show 'Logout ADMIN'
          else if (isset($_SESSION['PROFILE']) && $_SESSION['PROFILE']['role'] == 'ADMIN') { ?>
            <a href='logout.php' class='btn btn-outline-primary ms-5'><?php echo "Logout " . $_SESSION['PROFILE']['role']; ?></a>
          <?php }
          // if profile is NOT admin, show 'Logout'
          else { ?>
            <a href='logout.php' class='btn btn-outline-primary ms-5'>Logout</a>
          <?php }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>