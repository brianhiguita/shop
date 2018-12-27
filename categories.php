<?php  include "includes/head.php"; ?>

<?php

  $product_cat = new Product();
  $product_cat->get_product("tv");

 ?>

 <?php
     foreach ($product_cat->name_array as $i => $value) {
   ?>
       <?php echo $product_cat->name_array[$i] . "<br>"; ?>
       <?php echo $product_cat->price_array[$i] . "<br>"; ?>
       <?php echo $product_cat->category_array[$i] . "<br>"; ?>

 <?php
     }
   ?>




<?php include "includes/footer.php"; ?>
