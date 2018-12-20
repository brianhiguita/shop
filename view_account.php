<?php include "includes/head.php"; ?>



    <?php $view_user = New User();
    $view_user->get_user();

    echo $view_user->id;
    echo $view_user->email;
    echo $view_user->password;



    ?>


<?php include "includes/footer.php"; ?>
