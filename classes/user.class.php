<?php

class User {

  public $id;
  public $email;
  public $password;

  public function get_user($session_id) {
    $query = "SELECT * FROM `user` WHERE id = 23";
    $result = $this->user_query($query);

    while ($row = mysqli_fetch_assoc($result)) {

// SET USER SESSION
      // $_SESSION['user_email'] = $row['email'];
      // $_SESSION['user_id'] = $row['id'];

      $this->id = $row['id'] . "<br>";
      $this->email = $row['email'] . "<br>";
      $this->password = $row['password'];
    }

  }

// not inserting into database


  public function create_user() {
    global $database;
    if (isset($_POST['submit'])) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = mysqli_real_escape_string($database->connection, $_POST['email']);
        $password = mysqli_real_escape_string($database->connection, $_POST['password']);

        echo $email . "<br>";
        echo $password;

        $query = "INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')";
        $add_query = $this->user_query($query);

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
