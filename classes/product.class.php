<?php

Class Product {

  public $name_array = [];
  public $image_array = [];
  public $description_array = [];
  public $price_array = [];
  public $category_array = [];

// get all products

  public function get_all_products() {
    $query = "SELECT * FROM `product`";
    $result = $this->product_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
      foreach ($result as $row) {
        $this->name_array[] = $row['name'];
        $this->image_array[] = $row['image'];
        $this->description_array[] = $row['description'];
        $this->price_array[] = $row['price'];
        $this->category_array[] = $row['category'];
      }
    }
  }

// get products by category

  public function get_product($cat) {

    $query = "SELECT * FROM `product` WHERE `category` = '$cat'";
    $result = $this->product_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
      foreach ($result as $row) {
        $this->name_array[] = $row['name'];
        $this->image_array[] = $row['image'];
        $this->description_array[] = $row['description'];
        $this->price_array[] = $row['price'];
        $this->category_array[] = $row['category'];
      }
    }

  }

  protected function product_query($sql) {
    global $database;
    $query = $database->query($sql);
    return $query;
  }

}


 ?>
