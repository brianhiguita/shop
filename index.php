<?php  include "includes/head.php"; ?>

<?php
  $product = new Product();
  $product->get_all_products();
 ?>

<?php
    foreach ($product->name_array as $i => $value) {
  ?>
      <?php echo $product->name_array[$i] . "<br>"; ?>

      <?php echo $product->price_array[$i] . "<br>"; ?>

<?php
    }
  ?>



<?php include "includes/footer.php"; ?>
