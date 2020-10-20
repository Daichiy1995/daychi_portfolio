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
        $_SESSION['status'] = $login['status'];

        if($_SESSION['status'] == 'A'){
          header("Location: ../views/adminMenu.php");
        }elseif($_SESSION['status'] == 'U'){
          header('Location: ../views/userDashboard.php');
        }
      }else{

      }
    }
?>