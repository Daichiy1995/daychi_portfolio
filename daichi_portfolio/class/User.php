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

        $rows = array();

        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
              $rows[] = $row;
          }
          return $rows;
        }else{
          return false;
        }
      }

      public function getSpecificUser($user_id){   
         $sql = "SELECT * FROM users WHERE user_id = '$user_id'";

        $result = $this->conn->query($sql);
        
        if($result->num_rows == 1){
          return $result->fetch_assoc();
        }else{
          return false;
        }
      }

      public function updateUser($user_id,$first_name,$last_name,$address,$contact_number,$username,$password){
        $sql = "UPDATE users SET user_id  = '$user_id',first_name = '$first_name',last_name = '$last_name',address = '$address',contact_number = '$contact_number',username = '$username',password = '$password'
        WHERE user_id = '$user_id'";

        $result = $this->conn->query($sql);

        if($result == false){
          die("Cannot Update; ".$this->conn->error);
        }else{
          header("Location: ../views/adminUserlist.php");
        }
      }
      public function deleteUser($user_id){
        $sql  = "DELETE FROM users WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);

        if($result == false){
            die("Cannot Delete: " . $this->conn->error);
        }else{
          header("Location: ../views/adminUserlist.php");
        }
      }
  }

?>