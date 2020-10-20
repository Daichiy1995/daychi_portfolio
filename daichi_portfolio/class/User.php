<?php

  require_once 'Database.php';

  class User extends Database{

    public function createUser($first_name,$last_name,$address,$contact_number,$username, $password){
      $sql = "INSERT INTO users(first_name,last_name,address,contact_number,username,password)VALUES('$first_name','$last_name','$address','$contact_number','$username','$password')";

      $result = $this->conn->query($sql);

      if($result == false){
        die("CANNOT ADD USER: ".$this->conn->error);
      }else{
        header("Location: ../views/login.php");
      }
    }

      public function login($username,$password){
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
          return $result->fetch_assoc();
        }else{
          return false;
        }
      }

      public function displayUserlist(){
        $sql = "SELECT * FROM users";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
          return $result->fetch_assoc();
        }else{
          return false;
        }
      }
  }

?>