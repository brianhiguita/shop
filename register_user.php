<?php include "includes/head.php"; ?>

    <h1>Hello, world!</h1>

    <?php

    $register_user = new User();
    $register_user->create_user();

    ?>

    <form class="" action="" method="post">
      <input type="text" name="email" value="" placeholder="email">
      <input type="password" name="password" value="" placeholder="password">
      <input type="submit" name="submit" value="Register">
    </form>


<?php include "includes/footer.php"; ?>
