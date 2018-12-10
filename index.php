<?php include "includes/head.php"; ?>
    <h1>Hello, world!</h1>

    <?php $user = New User();
    $user->get_user();

    echo $user->id;
    echo $user->email;
    echo $user->password;


    ?>


<?php include "includes/footer.php"; ?>
