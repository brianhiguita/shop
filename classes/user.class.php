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






  public function user_query($sql) {
    global $database;
    $query = $database->query($sql);
    return $query;
  }


}


 ?>
