<?php
  require_once '../class/User.php';
  $user = new User();
  session_start();

    if(isset($_POST['register'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $address = $_POST['address'];
      $contact_number = $_POST['contact_number'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);


        $user->createUser($first_name,$last_name,$address,$contact_number,$username, $password);

    }elseif(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $login = $user->login($username,$password);

      if($login){
        $_SESSION['login_id'] = $login['user_id'];
        $_SESSION['username'] = $login['username'];
        $_SESSION['first_name'] = $login['first_name'];
        $_SESSION['last_name'] = $login['last_name'];
        $_SESSION['status'] = $login['status'];

        if($_SESSION['status'] == 'A'){
          header("Location: ../views/adminDashboard.php");
        }elseif($_SESSION['status'] == 'U'){
          header('Location: ../views/userDashboard.php');
        }
      }else{
        echo "Incorrect Usernam or Password";
      }
    }elseif(isset($_POST['updateUser'])){
      $user_id = $_POST['user_id'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $address = $_POST['address'];
      $contact_number = $_POST['contact_number'];
      $username = $_POST['username'];

      if(empty($_POST['new_password'])){
        $password = $_POST['old_password'];
      }else{
        $password = md5($_POST ['new_password']);
      }
      $user->updateUser($user_id,$first_name,$last_name,$address,$contact_number,$username,$password);

      //echo $user_id,$first_name,$last_name,$address,$contact_number,$username,$password;

    }
?>