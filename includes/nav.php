<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

<!-- IF USER IS NOT SIGNED IN -->

      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admin/index.php">Admin</a>
      </li>

    <?php if (!isset($_SESSION['email'])) { ?>

      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="register_user.php">Register</a>
      </li>

    <?php } ?>

<!-- IF USER IS SIGNED IN -->

    <?php if (isset($_SESSION['email'])) { ?>

      <li class="nav-item">
        <a class="nav-link" href="view_account.php">Account</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    <?php } ?>

    </ul>

  </div>
</nav>
