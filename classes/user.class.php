<?php

class User {

  public $id;
  public $email;
  public $password;

  public function get_user() {
    $query = "SELECT * FROM `user` WHERE `id` = 1";
    $result = $this->user_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
      $this->id = $row['id'];
      $this->email = $row['email'];
      $this->password = $row['password'];
    }

  }

// not inserting into database


  public function create_user() {

    if (isset($_POST['submit'])) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert_query = "INSERT INTO `user` (email, password) VALUES ('$email', '$password')";
        $result = $this->user_query($insert_query);
        echo "created";

      }
      else {
        echo "it failed";
      }

    }



  }




  public function user_query($sql) {
    global $database;
    $query = $database->query($sql);
    return $query;
  }


}


 ?>
