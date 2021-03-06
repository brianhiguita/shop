<?php

class User {

  public $id;
  public $email;
  public $password;
  public $user_exists;

  // view user details
  public function get_user() {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM `user` WHERE email = '$email'";
    $result = $this->user_query($query);

    while ($row = mysqli_fetch_assoc($result)) {
      $this->id = $row['id'];
      $this->email = $row['email'];
      $this->password = $row['password'];
    }
  }

  // create a user (entry in database)
  public function create_user() {
    global $database;
    if (isset($_POST['submit'])) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = mysqli_real_escape_string($database->connection, $_POST['email']);
        $password = mysqli_real_escape_string($database->connection, $_POST['password']);
        $password = md5($password);

        $this->user_exists($email, $password);

        if ($this->user_exists == false) {
          $query = "INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')";
          $add_query = $this->user_query($query);
        } else {
          echo "user already exists";
        }
      }
      else {
        echo "Not all fields were entered correctly";
      }
    }
  }

  // login to user account
  public function login_user() {
    if (isset($_POST['submit'])) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {

        global $database;
        $email = mysqli_real_escape_string($database->connection, $_POST['email']);
        $password = mysqli_real_escape_string($database->connection, $_POST['password']);
        $password = md5($password);
        $this->user_exists($email, $password);

        if ($this->user_exists == true) {
          $_SESSION['email'] = $email;
          header('Location: index.php');

        } else {
          echo "the user doesnt exists";
        }

      }
      else {
        echo "somethings empty";
      }
    }
  }

  // does the user exists? login and register
  protected function user_exists($email, $password) {
  $query = "SELECT * FROM `user` WHERE email = '$email' and password = '$password'";
  $result = $this->user_query($query);
    if (mysqli_num_rows($result)>=1) {
      $this->user_exists = true;
    }  else {
      $this->user_exists = false;
    }
  }

  // sql queries for this class
  protected function user_query($sql) {
    global $database;
    $query = $database->query($sql);
    return $query;
  }

  // checking if user is signed in
  public function is_signed_in() {
    if (!isset($_SESSION['email'])) {
      echo "user is not signed in, needs to be redirected";
      header('Location: index.php');
    }
  }

// end of class
}


 ?>
