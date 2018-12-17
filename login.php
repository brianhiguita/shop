<?php include "includes/head.php"; ?>

  <?php

  $login_user = new User();
  $login_user->login_user();



   ?>


  <form class="" action="" method="post">
    <input type="email" name="email" value="" placeholder="email">
    <input type="password" name="password" value="" placeholder="password">
    <input type="submit" name="submit" value="Login">
  </form>


<?php include "includes/footer.php"; ?>
